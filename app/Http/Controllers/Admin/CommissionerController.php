<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commissioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommissionerController extends Controller
{
    public function index()
    {
        return view('admin.commissioners.index', ['commissioners' => Commissioner::orderBy('sort_order')->get()]);
    }

    public function create()
    {
        return view('admin.commissioners.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'photo' => 'nullable|image|max:2048',
            'bio' => 'nullable|string',
            'is_chairman' => 'boolean',
            'is_former' => 'boolean',
            'sort_order' => 'nullable|integer',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('commissioners', 'public');
        }
        $validated['is_chairman'] = $request->boolean('is_chairman');
        $validated['is_former'] = $request->boolean('is_former');

        Commissioner::create($validated);
        return redirect()->route('admin.commissioners.index')->with('success', 'Commissioner added.');
    }

    public function edit(Commissioner $commissioner)
    {
        return view('admin.commissioners.edit', ['commissioner' => $commissioner]);
    }

    public function update(Request $request, Commissioner $commissioner)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'photo' => 'nullable|image|max:2048',
            'bio' => 'nullable|string',
            'is_chairman' => 'boolean',
            'is_former' => 'boolean',
            'sort_order' => 'nullable|integer',
        ]);

        if ($request->hasFile('photo')) {
            if ($commissioner->photo && file_exists(storage_path('app/public/' . $commissioner->photo))) {
                Storage::disk('public')->delete($commissioner->photo);
            }
            $validated['photo'] = $request->file('photo')->store('commissioners', 'public');
        }
        $validated['is_chairman'] = $request->boolean('is_chairman');
        $validated['is_former'] = $request->boolean('is_former');

        $commissioner->update($validated);
        return redirect()->route('admin.commissioners.index')->with('success', 'Commissioner updated.');
    }

    public function destroy(Commissioner $commissioner)
    {
        if ($commissioner->photo && file_exists(storage_path('app/public/' . $commissioner->photo))) {
            Storage::disk('public')->delete($commissioner->photo);
        }
        $commissioner->delete();
        return redirect()->route('admin.commissioners.index')->with('success', 'Commissioner deleted.');
    }
}
