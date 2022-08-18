<?php

namespace App\Repositories;

use App\Repositories\Interfaces\AdminRepoInterface;
use App\Models\Admin;
use Auth, Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AdminRepo implements AdminRepoInterface{

    public function admin_auth($request){
        $admin= Admin::where('email', $request->email)->first();
            if($admin->email_verified_at != NULL){
                if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password], 
        $request->get('remember'))){
            $request->session()->regenerateToken();
                return TRUE;
            
        }else{return FALSE;}
                    
            }else{
                Session::put('not_verified', $admin->name);
                return FALSE;
            }
        
        
    }
}