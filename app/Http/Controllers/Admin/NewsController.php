<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        return view('admin.news.index', ['news' => News::orderBy('published_at', 'desc')->get()]);
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:news,slug',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'category' => 'nullable|string|max:255',
            'author' => 'nullable|string|max:255',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('news', 'public');
        }
        $validated['is_published'] = $request->boolean('is_published');

        News::create($validated);
        return redirect()->route('admin.news.index')->with('success', 'News article created.');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', ['news' => $news]);
    }

    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:news,slug,' . $news->id,
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'category' => 'nullable|string|max:255',
            'author' => 'nullable|string|max:255',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }
        if ($request->hasFile('image')) {
            if ($news->image && file_exists(storage_path('app/public/' . $news->image))) {
                Storage::disk('public')->delete($news->image);
            }
            $validated['image'] = $request->file('image')->store('news', 'public');
        }
        $validated['is_published'] = $request->boolean('is_published');

        $news->update($validated);
        return redirect()->route('admin.news.index')->with('success', 'News article updated.');
    }

    public function destroy(News $news)
    {
        if ($news->image && file_exists(storage_path('app/public/' . $news->image))) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'News article deleted.');
    }
}
