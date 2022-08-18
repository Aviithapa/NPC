<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Auth;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerMarkdownMail;
use Illuminate\Support\Facades\Session;

class RouteController extends Controller
{
    private $UserRepository;
    public function __construct(UserRepositoryInterface $UserRepository){
        $this->UserRepository= $UserRepository;
    }

    public function authenticate(Request $request){
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if($this->UserRepository->user_attempt_to_auth($request)){
            $name= Auth::user()->name;
            return redirect('/dashboard/'.$name);
            
        }else{
            if(Session::has('not_verified_user')){
                $data= $this->UserRepository->getVerCodeWithName($request);
        
            if(Mail::to($request->email)->send(new EmailVerMarkdownMail($data['name'], $data['code']))){
                               
                // return new EmailVerMarkdownMail($request->name, $res);
                return back()->with('verify_via_email', 'Not verified, Check your email !');
               
            }else{
                return back()->withErrors(['error' => 'Error: Mail not sent !']);
            }
            
            }else{
                return back()->withErrors(['error' => 'Invalid Credentials !']);    
            }
            // return back()->withErrors(['error' => 'Invalid Credentials !']);
        }
        
    }

    public function get_login(Request $request){
        return view('auth.login');
    }

    public function email_verification(Request $request, $name, $remember_token){
        // $verCode= $request::get('code');
        if($this->UserRepository->verify_email($remember_token, $name)){
            return redirect('/dashboard/'.$name);
        }else{dd('Something Wrong !');}
        
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect()->route('get.login');
    }

    public function register(Request $request){
        $res= $this->UserRepository->create_user($request);
        if($res){
            // Sending markdown mail
            if(Mail::to($request->email)->send(new EmailVerMarkdownMail($request->name, $res))){
                Session::flash('verify_via_email', 'Check Your email to verify');                
                // return new EmailVerMarkdownMail($request->name, $res);
                return redirect()->route('get.login');
                // return redirect('/dashboard/'.$request->name);
            }            
        }else{return back()->withErrors(['error'=>'Something went wrong !']);}
    }

    public function user_dashboard(Request $request, $name){

        return view('dashboard');
    }

    public function change_password_view(Request $request, $name){

        return view('change_password');
    }

    public function change_email_view(Request $request, $name){

        return view('change_email');
    }

    public function change_password(Request $request, $name){

        if($this->UserRepository->change_user_pwd($request, $name)){
            Session::flash('success', 'Password Changed sucessfully!');
            return back();
        }else{
            Session::flash('error', 'Wrong Password!');
            return back();
        }
        
    }

    public function change_email(Request $request, $name){
        $verCode= Auth::user()->verification_code;
        if(Mail::to($request->email)->send(new EmailVerMarkdownMail($name, $verCode))){
            Session::flash('verify_via_email', 'Check Your email to verify');                
            // return new EmailVerMarkdownMail($request->name, $res);
            return redirect()->route('get.login');
            // return redirect('/dashboard/'.$request->name);
        }
    }
}

