<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;

class ProjectsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the project.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(15);

        return view('web.pages.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new project.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.pages.projects.create');
    }

    /**
     * Store a newly created project in storage.
     *
     * @param ProjectRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        Project::create($request->all());

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified project.
     *
     * @param  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($project)
    {
        return view('web.pages.projects.edit', compact('project'));
    }

    /**
     * Update the specified project in storage.
     *
     * @param ProjectRequest|Request $request
     * @param  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $project)
    {
        $project->update($request->all());

        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified project from storage.
     *
     * @param  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}