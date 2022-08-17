<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\AdminRepoInterface;
use App\Repositories\AdminRepo;

class AdminController extends Controller
{
    private $AdminRepository;
    public function __construct(AdminRepoInterface $AdminRepository){
        $this->AdminRepository= $AdminRepository;
    }

    public function get_login(){
        return view('admin.auth.login');
    }

    public function admin_auth(Request $request){
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if($this->AdminRepository->admin_auth($request)){
            $name= Auth::guard('admin')->user()->name;
            return redirect('admin/dashboard/'.$name);
        }else{
            if(Session::has('not_verified')){
                              
                // return new EmailVerMarkdownMail($request->name, $res);
                return back()->with('verify_via_email', 'Not Verified !');
            }else{
                return back()->withErrors(['error' => 'Invalid Credentials !']);
        }
        // return back()->withErrors(['error' => 'Invalid Credentials !']);
        }
        }

    public function admin_dashboard(){
        return view('admin.dashboard');
    }

    public function logout(Request $request){
        Auth::guard('admin')->logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect()->route('admin.get.login');
    }
}
