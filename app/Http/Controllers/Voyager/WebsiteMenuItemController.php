<?php
/**
 * Created by PhpStorm.
 * User: BRANIX
 * Date: 12/17/2018
 * Time: 4:51 PM
 */

namespace App\Http\Controllers\Voyager;
use App\WebsiteMenuItem;
use Illuminate\Http\Request;



class WebsiteMenuItemController extends VoyagerBaseController
{
    public function store(Request $request) {
        $item = new WebsiteMenuItem;
        $item->name = $request->input('name');
        $item->url = $request->input('url');
        $item->menu = implode(",", $request->input('menu'));
        $item->save();
        return redirect('/admins/website-menu-items');

    }
    public function update(Request $request, $id) {
        $item = WebsiteMenuItem::find($id);
        $item->name = $request->input('name');
        $item->url = $request->input('url');

            $item->menu = implode(",", $request->input('menu'));

        $item->save();
        return redirect('/admins/website-menu-items');

    }
}