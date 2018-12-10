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
use App\Service;
use App\Industry;
use Illuminate\Support\Facades\Storage;

class ProjectsController  extends VoyagerBaseController
{

    public function store(Request $request) {

        if($request->hasFile('ProImage')){
            $complete_filename =$request->file('ProImage')->getClientOriginalName();
            $filename=pathinfo($complete_filename, PATHINFO_FILENAME);
            $extension=$request->file('ProImage')->getClientOriginalExtension();
            $proimage=$filename.'.'.$extension;
            //Image upload
            $file = $request->file('ProImage');
            $file->move(public_path('/img/icon/port project'), $proimage);


        }
        if($request->hasFile('OppSectImage')){
            $complete_filename =$request->file('OppSectImage')->getClientOriginalName();
            $filename=pathinfo($complete_filename, PATHINFO_FILENAME);
            $extension=$request->file('OppSectImage')->getClientOriginalExtension();
            $oppimage=$filename.'.'.$extension;
            //Image upload
            $file = $request->file('OppSectImage');
            $file->move(public_path('/img/icon/port project'), $oppimage);

        }
        if($request->hasFile('RevLogo')){
            $complete_filename =$request->file('RevLogo')->getClientOriginalName();
            $filename=pathinfo($complete_filename, PATHINFO_FILENAME);
            $extension=$request->file('RevLogo')->getClientOriginalExtension();
            $rev_logo=$filename.'.'.$extension;
            //Image upload
            $file = $request->file('RevLogo');
            $file->move(public_path('/img/icon/port project'), $rev_logo);
        }
        if($request->hasFile('SolSectImage')){
            $complete_filename =$request->file('SolSectImage')->getClientOriginalName();
            $filename=pathinfo($complete_filename, PATHINFO_FILENAME);
            $extension=$request->file('SolSectImage')->getClientOriginalExtension();
            $solimage=$filename.'.'.$extension;
            //Image upload
            $file = $request->file('SolSectImage');
            $file->move(public_path('/img/icon/port project'), $solimage);
        }
        if($request->hasFile('ImpSectImage')){
            $complete_filename =$request->file('ImpSectImage')->getClientOriginalName();
            $filename=pathinfo($complete_filename, PATHINFO_FILENAME);
            $extension=$request->file('ImpSectImage')->getClientOriginalExtension();
            $impimage=$filename.'.'.$extension;
            //Image upload
            $file = $request->file('ImpSectImage');
            $file->move(public_path('/img/icon/port project'), $impimage);


        }
        $project = new Project;
        $project->ProSelection = $request->input('ProSelection');
        $project->ProBgcolor = $request->input('ProBgcolor');
        $project->ProTittle = $request->input('ProTittle');
        $project->ProIndustry = $request->input('ProIndustry');
        $project->ProServices = implode(" ", $request->input('ProServices'));
        $project->ProTechnology = implode(" ", $request->input('ProTechnology'));
        $project->ProTags =  implode(",", $request->input('ProServices')) .  "," . implode(",", $request->input('ProTechnology'));
        if(isset($proimage)) {
            $project->ProImage = $proimage;
        }
        $project->ProDes = $request->input('ProDes');
        $project->ProTags = $request->input('ProTags');
        $project->ProShowHomePage = $request->input('ProShowHomePage');
        $project->OppSectTittle = $request->input('OppSectTittle');
        $project->OppSectDes = $request->input('OppSectDes');
        if(isset($oppimage)) {
            $project->OppSectImage = $oppimage;
        }
        $project->RevSect = (int)($request->input('RevSect'));
        if(isset($rev_logo)) {
            $project->RevLogo = $rev_logo;
        }
        $project->RevMessage = $request->input('RevMessage');
        $project->ReVReviewer = $request->input('ReVReviewer');
        $project->AppSect = (int)($request->input('AppSect'));
        $project->AppSectDes = $request->input('AppSectDes');
        $project->AppSectTittle = $request->input('AppSectTittle');
        $project->SolSectTittle = $request->input('SolSectTittle');
        $project->SolSectDes = $request->input('SolSectDes');
        if(isset($solimage)) {
            $project->SolSectImage = $solimage;
        }
        $project->ImpSect = (int)($request->input('ImpSect'));
        $project->ImpSectDes = $request->input('ImpSectDes');
        $project->ImpSectTittle = $request->input('ImpSectTittle');
        if(isset($impimage)) {
            $project->ImpSectImage = $impimage;
        }
        $project->save();
        return redirect('/admins/projects');

    }
    public function update(Request $request, $id) {
        if($request->hasFile('ProImage')){
            $complete_filename =$request->file('ProImage')->getClientOriginalName();
            $filename=pathinfo($complete_filename, PATHINFO_FILENAME);
            $extension=$request->file('ProImage')->getClientOriginalExtension();
            $proimage=$filename.'.'.$extension;
            //Image upload
            $file = $request->file('ProImage');
            $file->move(public_path('/img/icon/port project'), $proimage);


        }
        if($request->hasFile('OppSectImage')){
            $complete_filename =$request->file('OppSectImage')->getClientOriginalName();
            $filename=pathinfo($complete_filename, PATHINFO_FILENAME);
            $extension=$request->file('OppSectImage')->getClientOriginalExtension();
            $oppimage=$filename.'.'.$extension;
            //Image upload
            $file = $request->file('OppSectImage');
            $file->move(public_path('/img/icon/port project'), $oppimage);

        }
        if($request->hasFile('RevLogo')){
            $complete_filename =$request->file('RevLogo')->getClientOriginalName();
            $filename=pathinfo($complete_filename, PATHINFO_FILENAME);
            $extension=$request->file('RevLogo')->getClientOriginalExtension();
            $rev_logo=$filename.'.'.$extension;
            //Image upload
            $file = $request->file('RevLogo');
            $file->move(public_path('/img/icon/port project'), $rev_logo);
        }
        if($request->hasFile('SolSectImage')){
            $complete_filename =$request->file('SolSectImage')->getClientOriginalName();
            $filename=pathinfo($complete_filename, PATHINFO_FILENAME);
            $extension=$request->file('SolSectImage')->getClientOriginalExtension();
            $solimage=$filename.'.'.$extension;
            //Image upload
            $file = $request->file('SolSectImage');
            $file->move(public_path('/img/icon/port project'), $solimage);
        }
        if($request->hasFile('ImpSectImage')){
            $complete_filename =$request->file('ImpSectImage')->getClientOriginalName();
            $filename=pathinfo($complete_filename, PATHINFO_FILENAME);
            $extension=$request->file('ImpSectImage')->getClientOriginalExtension();
            $impimage=$filename.'.'.$extension;
            //Image upload
            $file = $request->file('ImpSectImage');
            $file->move(public_path('/img/icon/port project'), $impimage);


        }
        $project = Project::find($id);
        $project->ProSelection = $request->input('ProSelection');
        $project->ProBgcolor = $request->input('ProBgcolor');
        $project->ProTittle = $request->input('ProTittle');
        $project->ProIndustry = $request->input('ProIndustry');
        $project->ProServices = implode(" ", $request->input('ProServices'));
        $project->ProTechnology = implode(" ", $request->input('ProTechnology'));
        $project->ProTags =  implode(",", $request->input('ProServices')) . ",". implode(",", $request->input('ProTechnology'));

        if(isset($proimage)) {
            $project->ProImage = $proimage;
        }

        $project->ProDes = $request->input('ProDes');
        $project->ProShowHomePage = $request->input('ProShowHomePage');
        $project->OppSectTittle = $request->input('OppSectTittle');
        $project->OppSectDes = $request->input('OppSectDes');
        if(isset($oppimage)) {
            $project->OppSectImage = $oppimage;
        }
        $project->RevSect = (int)($request->input('RevSect'));
        if(isset($rev_logo)) {
            $project->RevLogo = $rev_logo;
        }
        $project->RevMessage = $request->input('RevMessage');
        $project->ReVReviewer = $request->input('ReVReviewer');
        $project->AppSect = (int)($request->input('AppSect'));
        $project->AppSectDes = $request->input('AppSectDes');
        $project->AppSectTittle = $request->input('AppSectTittle');
        $project->SolSectTittle = $request->input('SolSectTittle');
        $project->SolSectDes = $request->input('SolSectDes');
        if(isset($solimage)) {
            $project->SolSectImage = $solimage;
        }
        $project->ImpSect = (int)($request->input('ImpSect'));
        $project->ImpSectDes = $request->input('ImpSectDes');
        $project->ImpSectTittle = $request->input('ImpSectTittle');
        if(isset($impimage)) {
            $project->ImpSectImage = $impimage;
        }
        $project->save();
        return redirect('/admins/projects');
    }
}