<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Mail\ForgotPasswordMail;
use App\Models\User;







class AuthController extends Controller
{
    public function login(Request $request){
       // $password = "123456";
        //$dd = Hash::make($password);
       // dd($dd);
        return view('backend.auth.login');


    }
    public function forgot (Request $request){
        return view('backend.auth.forgot');
    }

    public function forgot_admin (Request $request)
    {
        $rendome_password = rand(111111111,999999999);
        $user = User::where('email','=', $request->email)->first();
        if(!empty($user)){
            $user->password = Hash::make($rendome_password);
            $user->save();

            $user->password_rendome = $rendome_password;

            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect()->back()->with('success', 'Password Successfull send your email box. Please cheack your email box!');

        }else{
            return redirect()->back()->with('error', 'Email ID Not Found!');
            }
        }
        

    

    public function login_admin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], true)){
            if (!empty(Auth::User()->status)){
                if(Auth::User()->is_role == '1'){
                    return redirect ()->intended('admin/dashboard');
                }else{
                    return redirect('login')->with('error', 'Not admin');
                }
                
            
            }else{
                $user_id = Auth::user()->id;
                Auth::logout();
                $user = User::find($user_id);
                return redirect('login')->with('success', 'This email is not verified yest!');
            }
        }else{
            return  redirect()->back()->with('error', 'Please enter the correct crecentials!');
        }
    
    }
    //logout
    public function logout(){
        Auth::logout();
        return redirect(url('login'));
    }
}
