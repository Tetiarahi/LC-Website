<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.sliders.index', ['sliders' => Slider::orderBy('sort_order')->get()]);
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'required|image|max:2048',
            'link' => 'nullable|url',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('sliders', 'public');
        }
        $validated['is_active'] = $request->boolean('is_active');

        Slider::create($validated);
        return redirect()->route('admin.sliders.index')->with('success', 'Slider created.');
    }

    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', ['slider' => $slider]);
    }

    public function update(Request $request, Slider $slider)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
            'link' => 'nullable|url',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($slider->image && file_exists(storage_path('app/public/' . $slider->image))) {
                Storage::disk('public')->delete($slider->image);
            }
            $validated['image'] = $request->file('image')->store('sliders', 'public');
        }
        $validated['is_active'] = $request->boolean('is_active');

        $slider->update($validated);
        return redirect()->route('admin.sliders.index')->with('success', 'Slider updated.');
    }

    public function destroy(Slider $slider)
    {
        if ($slider->image && file_exists(storage_path('app/public/' . $slider->image))) {
            Storage::disk('public')->delete($slider->image);
        }
        $slider->delete();
        return redirect()->route('admin.sliders.index')->with('success', 'Slider deleted.');
    }
}
