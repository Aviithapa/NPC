<?php
namespace App\Repositories;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\models\User;
use Auth;

class UserRepository implements UserRepositoryInterface{

    public function user_attempt_to_auth($request){
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password], 
        $request->get('remember'))){
            $request->session()->regenerateToken();
            return TRUE;
            
        }else{return FALSE;}
    }
}