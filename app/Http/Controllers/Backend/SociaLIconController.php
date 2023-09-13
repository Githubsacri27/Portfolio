<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\SocialIconModel;

class SociaLIconController extends Controller
{
    public function admin_social_icon(Request $request){

        $data['getrecord'] = SocialIconModel::find(1);
        return view('backend.social_icon.update', $data);
    }
    public function admin_social_icon_update($id, Request $request){
        $updaterecord = SocialIconModel::find($id);
        $updaterecord->name = trim($request->name);
        $updaterecord->email = trim($request->email);
        $updaterecord->github = trim($request->github);
        $updaterecord->linkedin = trim($request->linkedin);
        $updaterecord->save();
        return redirect()->back()->with('success', "Record Successfully Updated!");
    }
}
