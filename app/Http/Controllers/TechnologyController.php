<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {
        $technologies = Technology::all();
        return view('technologies.index', compact('technologies'));
    }

    public function create()
    {
        return view('technologies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:technologies',
        ]);

        Technology::create($request->all());
        return redirect()->route('technologies.index')->with('success', 'Technology created successfully.');
    }

    public function show($id)
    {
        $technology = Technology::findOrFail($id);
        return view('technologies.show', compact('technology'));
    }

    public function edit($id)
    {
        $technology = Technology::findOrFail($id);
        return view('technologies.edit', compact('technology'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:technologies,name,' . $id,
        ]);

        $technology = Technology::findOrFail($id);
        $technology->update($request->all());
        return redirect()->route('technologies.index')->with('success', 'Technology updated successfully.');
    }

    public function destroy($id)
    {
        $technology = Technology::findOrFail($id);
        $technology->delete();
        return redirect()->route('technologies.index')->with('success', 'Technology deleted successfully.');
    }
}
