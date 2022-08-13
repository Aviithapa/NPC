<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Officer\BaseController;

class LogsController extends BaseController{

    public function __construct(){
    
    }

    public function index(){ 
        return view('admin.website.log.index');
    }
}