<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function show(string $id) {
        $project = Project::findOrFail($id);
        return view('admin.projects.show', compact('project'));
    }

    public function create() {
        return view('admin.projects.create');
    }

    public function store(Request $request) {
        $new_project = Project::create($request->all());

        return redirect()->route('admin.projects.show', ['id' => $new_project->id]);

    }

    public function edit(string $id) {
        return view('admin.projects.edit', compact('id'));
    }

    public function update() {

    }

    public function delete() {

    }
}
