<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'asc')->where('ProSelection', 'True')->get();
        $total_projects = count($projects);

        $projects_shown = $projects->splice(0,8);

        if($total_projects > count($projects_shown)) {

            $end="false";
        }
        else {
            $end = "true";
        }
        return view('projects')->with('projects', $projects_shown)->with('end', $end);
    }
    public function loadmore(Request $request) {
        $projects = Project::orderBy('id', 'asc')->where('ProSelection', 'True')->get();
        $total_projects = count($projects);
        $shown = (int)$request['count'];
        $projects_shown = $projects->splice($shown, $shown);
        if($total_projects > ($shown + count($projects_shown))) {
            $end="false";
        }
        else {
            $end = "true";
        }
        return array('projects_shown'=>$projects_shown, 'end' => $end);

    }
    public function filter(Request $request)
    {
        $industry = explode(",", $request['industry']);
        $technology = explode(",", $request['technology']);
        $services = explode(",", $request['services']);
        $projects = Project::orderBy('id', 'asc')->where('ProSelection', 'True')->get();
        $selected_projects = array();
        foreach ($projects as $project) {
            $selected = false;
            if ($selected == false) {
                for($i=0; $i<(count($industry)-1); $i++) {
                    if (!(stripos($project['ProIndustry'], $industry[$i]) === false)) {
                        $selected = true;
                        array_push($selected_projects, $project);
                        Log::info($project);
                        break;
                    }
                }
                if ($selected == false) {
                    for($i=0; $i<(count($technology)-1); $i++) {
                        if (!(stripos($project['ProTechnology'], $technology[$i]) === false)) {
                            $selected = true;
                            array_push($selected_projects, $project);
                            break;
                        }
                    }
                    if ($selected == false) {
                        for($i=0; $i<(count($services)-1); $i++) {
                            if (!(stripos($project['ProServices'], $services[$i]) === false)) {
                                $selected = true;
                                array_push($selected_projects, $project);
                                break;
                            }
                        }
                    }
                }

            }
        }
        return array('selected_projects'=>$selected_projects);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->first();
        $projects=Project::orderBy('id','asc')->get();
        if($project) {
            return view("projects-detail")->with('data', $project)->with('dataarray', $projects);
        }
        else {
            abort('404');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
