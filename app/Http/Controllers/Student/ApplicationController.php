<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Officer\BaseController;
use Illuminate\Http\Request;

class ApplicationController extends BaseController{

    public function __construct(){
    
    }

    public function index(){ 
        return view('admin.website.application.index');
    }

    public function create(){
        return view('admin.website.application.create');
    }

    public function edit(){
        return view('admin.website.applicantion.edit');
    }

    // public function delete($id){
       
    // }
 
    public function update(Request $request, $id){

    }

    public function store(Request $request){

    }

    public function show()
    {
        # code...
    }
}