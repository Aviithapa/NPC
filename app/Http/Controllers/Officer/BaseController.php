<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;


class BaseController extends Controller{
    public function __construct(){}

    public function view($view, $data = array(), $mergeData = array()){
        return view('admin'. $view, $data, $mergeData);
    }
}



