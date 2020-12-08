<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return redirect()->route('top',[
            'projects'      => $projects,
        ]);
    }

    public function create(CreateProjectRequest $request){
            $project = new Project();
            $project->fill([
                'user_id'         => $request->user_id,
                'title'           => $request->title,
                'description'     => $request->description,
                'github_url'      => $request->github_url,
                'drawio_url'      => $request->drawio_url,
                'mindmap_url'     => $request->mindmap_url,
            ])->save();
            $project->save();
            $projects = Project::all();

            return redirect()->route('top');
    }

    public function showEdit(Request $request){
        $project = Project::find($request->project_id);
        return view('edit',[
            'project'   => $project,
        ]);
    }

    public function editStore(CreateProjectRequest $request,$project_id){
        $project = Project::find($project_id);
        // dd($project);
        $project->fill([
            'user_id'         => $project->user->id,
            'title'           => $request->title,
            'description'     => $request->description,
            'github_url'      => $request->github_url,
            'drawio_url'      => $request->drawio_url,
            'mindmap_url'     => $request->mindmap_url,
        ])->save();
        $projects = Project::all();

        return redirect()->route('top',['projects'=>$projects]);
    }
}
