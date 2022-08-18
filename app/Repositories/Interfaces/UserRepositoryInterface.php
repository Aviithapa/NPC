<?php
namespace App\Repositories\Interfaces;

interface UserRepositoryInterface{
    
    public function user_attempt_to_auth($request);
    public function getVerCodeWithName($request);
    public function create_user($request);
    public function verify_email($code, $name);
    public function change_user_pwd($request, $name);
    public function change_user_email($request, $name);

}