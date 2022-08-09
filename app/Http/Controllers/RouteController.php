<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Auth;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;

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
            return redirect('/dashboard');
        }else{
            return back()->withErrors(['error' => 'Invalid Credentials !']);
        }
        
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}
