<?php

namespace App\Http\Controllers\Officer\Applicant;

use App\Http\Controllers\Officer\BaseController;
use Illuminate\Http\Request;

class ApplicantController extends BaseController{
 
    public function __construct(){

        parent::__construct();
    }

    public function index(){ 
        dd('index');
        return view('admin.website.applicant.index');
    }

    public function create(){

    }

    public function show(){
        return view('admin.website.applicant.view');
    }

    public function delete($id){

    }
 
    public function update(Request $request, $id){

    }
}