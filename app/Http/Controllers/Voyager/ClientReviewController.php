<?php

namespace App\Http\Controllers\Voyager;

use App\ClientReview;
use Illuminate\Http\Request;

class ClientReviewController extends VoyagerBaseController
{
    public function store(Request $request) {
        if ($request->hasFile('photo')) {
            $complete_filename = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($complete_filename, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $logo = $filename . '.' . $extension;
            //Image upload
            $file = $request->file('photo');
            $file->move(public_path('/img/home-icon/reviewerimage/'), $logo);

        }
        $client_review = new ClientReview;
        $client_review->review = $request->input('review');
        $client_review->reviewer = $request->input('reviewer');
        $client_review->designation = $request->input('designation');
        $client_review->ShowHomePage = $request->input('ShowHomePage');
        $client_review->photo = $logo;
        $client_review->save();
        return redirect('/admins/client-review');
    }
    public function update(Request $request, $id) {
        if ($request->hasFile('photo')) {
            $complete_filename = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($complete_filename, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $logo = $filename . '.' . $extension;
            //Image upload
            $file = $request->file('photo');
            $file->move(public_path('/img/home-icon/reviewerimage/'), $logo);

        }
        $client_review = ClientReview::find($id);
        $client_review->review = $request->input('review');
        $client_review->reviewer = $request->input('reviewer');
        $client_review->designation = $request->input('designation');
        $client_review->ShowHomePage = $request->input('ShowHomePage');
        if(isset($logo)) {
            $client_review->photo = $logo;
        }
        $client_review->save();
        return redirect('/admins/client-review');
    }
}