<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use App\Models\AboutModel;
use App\Models\ContactModel;
use App\Models\WorksModel;
use App\Models\SocialIconModel;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactMail;

class HomeController extends Controller
{
    public function index(){
        $data['getrecord'] = HomeModel::all();
        $data['meta_title']='Home';
        $data['className']='home';
        return view('index',$data) ;
    }
    public function about(){
        $data['getrecord'] = AboutModel::all();
        $data['meta_title']='About';
        $data['className']='about';
        return view('about', $data);
    }

    public function contact(){
        $data['getrecord'] = SocialIconModel::find(1);
        $data['meta_title']='Contact';
        $data['className']='contact';
        return view('contact',$data);
    }
    public function contact_post(Request $request){

        $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|unique:contact|max:255|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'subject' => 'required',
            'message'=>'required'
        ]);
        $contact = new ContactModel;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('success', 'Contact form submitted successfully.');
    }

    public function works(){
        $data['getrecord'] = WorksModel::get();
        $data['meta_title']='Works';
        $data['className']='works';
        return view('works', $data);
    }
    public function works_post($id, Request $request){
        $data['getrecord'] = WorksModel::find($id);
        $data['meta_title']='Works Post';
        $data['className']='works-post';
        return view('works-post', $data);
    }
    
}
