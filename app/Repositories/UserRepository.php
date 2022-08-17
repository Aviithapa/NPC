<?php
namespace App\Repositories;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Auth, Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface{

    public function user_attempt_to_auth($request){
        $user= User::where('email', $request->email)->first();
            if($user->email_verified_at != NULL){
                if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password], 
        $request->get('remember'))){
            $request->session()->regenerateToken();
                return TRUE;
            
        }else{return FALSE;}
                    
            }else{
                Session::put('not_verified_user', $user->name);
                return FALSE;
            }
    
    }

    public function getVerCodeWithName($request){
        $user= User::where('email', $request->email)->first();
        $data= ['name'=>$user->name, 'code'=>$user->verification_code];
        return $data;
    }

    public function create_user($request){
        $request->validate([
            'name'=>'required|min:3|unique:users',
            'email'=>'required|email|unique:users',
            'phone'=>'sometimes|unique:users|max:10|min:10',
            'password'=>'required|min:6|confirmed',
            'password_confirmation'=>'required',
            'g-recaptcha-response'=> function($attribute, $value, $fail){
                $resp= $value;
                $userip= $_SERVER['REMOTE_ADDR'];
                $skey= env('secret_key');
                $url= "https://www.google.com/recaptcha/api/siteverify";
                
                $ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'secret' => $skey,
        'response' => $resp,
        'remoteip' => $userip
    ],
    CURLOPT_RETURNTRANSFER => true
]);

$output = curl_exec($ch);
curl_close($ch);

$json = json_decode($output);

                

                if(!$json->success){
                    Session::flash('g-recaptcha-response', 'Check reCaptcha');
                    Session::flash('alert-class', 'alert-danger');
                    $fail($attribute.'google reCaptcha failed !');
                }
            },
            
        ]);
        // if($validator->fails()){
        //     $error= $validator->errors();
        //     return FALSE;
        // }
        // if($validator->passes()){
            $token= random_bytes(20);
            $remember_token= bin2hex($token);
                
                $user= new User();
            $user->name= $request->name;
            $user->email= $request->email;
            $user->phone= $request->phone;
            $user->password= Hash::make($request->password);
            $user->verification_code= $remember_token;
            $user->timestamps= now();
            if($user->save()){
                return $user->verification_code;
            }
        // }
        
    }

    public function verify_email($code, $name){
        $unver_user= User::where('verification_code', $code)->first();
        $ver_name= $unver_user->name;
        
        if($ver_name === $name){
            $unver_user->email_verified_at= now();
            if($unver_user->save()){
                return TRUE;
            }else{return FALSE;}    
        }else{return FALSE;}
        
    }

    public function change_user_pwd($request, $name){
        $request->validate([
            'cpassword'=>'required',
            'new_password'=>'required|min:6|confirmed',
            'new_password_confirmation'=>'required',
        ]);
        
        $user= Auth::user();
        if($name === $user->name){
            if(Hash::check($request->cpassword, $user->password)){
                $user->password= Hash::make($request->new_password);
                $user->save();
                return TRUE;
            }else{return FALSE;}
        }else{return FALSE;}

    }

    public function change_user_email($request, $name){}





}