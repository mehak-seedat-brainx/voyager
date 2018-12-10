<?php

namespace App\Http\Controllers\Voyager;

use App\ClientLogo;
use Illuminate\Http\Request;

class ClientLogosController extends VoyagerBaseController
{
    public function store(Request $request)
    {

        if ($request->hasFile('logo')) {
            $complete_filename = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($complete_filename, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $logo = $filename . '.' . $extension;
            //Image upload
            $file = $request->file('logo');
            $file->move(public_path('/img/home-icon/'), $logo);


        }
       $client_logo = new ClientLogo;
        $client_logo->ShowHomePage = $request->input('ShowHomePage');
        $client_logo->logo = $logo;
        $client_logo->save();
        return redirect('/admins/client-logo');
    }
    public function update(Request $request, $id)
    {

        if ($request->hasFile('logo')) {
            $complete_filename = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($complete_filename, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $logo = $filename . '.' . $extension;
            //Image upload
            $file = $request->file('logo');
            $file->move(public_path('/img/home-icon/'), $logo);


        }
        $client_logo = ClientLogo::find($id);
        $client_logo->ShowHomePage = $request->input('ShowHomePage');
        $client_logo->logo = $logo;
        $client_logo->save();
        return redirect('/admins/client-logo');
    }
}
