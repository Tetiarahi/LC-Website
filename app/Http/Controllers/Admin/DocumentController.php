<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index()
    {
        return view('admin.documents.index', ['documents' => Document::orderBy('sort_order')->get()]);
    }

    public function create()
    {
        return view('admin.documents.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|max:10240',
            'category' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
        ]);

        if ($request->hasFile('file')) {
            $validated['file_path'] = $request->file('file')->store('documents', 'public');
        }
        unset($validated['file']);

        Document::create($validated);
        return redirect()->route('admin.documents.index')->with('success', 'Document uploaded.');
    }

    public function destroy(Document $document)
    {
        if ($document->file_path && file_exists(storage_path('app/public/' . $document->file_path))) {
            Storage::disk('public')->delete($document->file_path);
        }
        $document->delete();
        return redirect()->route('admin.documents.index')->with('success', 'Document deleted.');
    }
}
