<?php
/**
 * Created by PhpStorm.
 * User: BRANIX
 * Date: 12/10/2018
 * Time: 3:48 PM
 */

namespace App\Http\Controllers\Voyager;
use Illuminate\Http\Request;
use App\Project;

class ProjectsController  extends VoyagerBaseController
{
    public function store(Request $request) {

        if($request->hasFile('ProImage')){
            $complete_filename =$request->file('ProImage')->getClientOriginalName();
            $filename=pathinfo($complete_filename, PATHINFO_FILENAME);
            $extension=$request->file('ProImage')->getClientOriginalExtension();
            $proimage=$filename.$extension;
            //Image upload
            $path=$request->file('ProImage')->storeAs('../../public/img/icon/port project', $proimage);
        }
        $project = new Project;
        $project->ProSelection = $request->input('ProSelection');
        $project->ProBgColor = $request->input('ProBgColor');
        $project->ProTittle = $request->input('ProTittle');
        $project->ProIndustry = $request->input('ProIndustry');
        $project->ProServices = $request->input('ProServices');
        $project->ProTechnology = $request->input('ProTechnology');
        $project->ProImage = $proimage;
        $project->RevSect = $request->input('RevSect');
        $project->save();
        return redirect('/admins/projects');

    }
}