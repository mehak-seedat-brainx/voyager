<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class PagesController extends Controller
{
    public function index() {
        $title='Home!';
        if(Auth::guest()) {
            return view('pages.index', compact('title'));
        }
        else {
            $user_id=auth()->user()->id;
            $user=User::find($user_id);
            return view('home')->with('posts', $user->posts);
        }
    }
    public function about() {
        $title='About!';
        return view ('pages.about')->with('title', $title);
    }
    public function services() {
        $data=array(
            'title' => 'Services:',
            'services' => ['Web', 'Mobile']

        );
        return view ('pages.services')->with($data);
    }
}
