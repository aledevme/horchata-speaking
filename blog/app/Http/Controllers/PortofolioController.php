<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest('id')->paginate();

        return view('portfolio', compact('projects') );
    }
    public function show($id){
        $project = Project::find($id);
        return view('projects.show',[
            'project' => $project
        ]);
    }

}
