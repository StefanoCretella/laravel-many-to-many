<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $technologies = Technology::all();
        return view('projects.create', compact('technologies'));
    }

    public function store(Request $request)
    {
        $project = Project::create($request->all());
        $project->technologies()->attach($request->technologies);
        return redirect()->route('projects.index');
    }

    public function show($id)
    {
        $project = Project::with('technologies')->findOrFail($id);
        return view('projects.show', compact('project'));
    }

    public function edit($id)
    {
        $project = Project::with('technologies')->findOrFail($id);
        $technologies = Technology::all();
        return view('projects.edit', compact('project', 'technologies'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->all());
        $project->technologies()->sync($request->technologies);
        return redirect()->route('projects.index');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
