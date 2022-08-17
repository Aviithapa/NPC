<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Officer\BaseController;
use App\Http\Requests\Application\StoreApplicantProfileRequest;
use App\Http\Requests\Application\UpdateApplicantProfileRequest;
use App\Services\Application\ApplicationCreator;
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
 
    public function update(UpdateApplicantProfileRequest $request, $id){
        return ;
    }

    public function store(StoreApplicantProfileRequest $request, ApplicationCreator $applicationCreator){
     $data = $applicationCreator->store($request);
     return view('admin.website.application.index');
    }

    public function show()
    {
        # code...
    }


    public function save_image(Request $request,$fieldName)
    {
        try{
            $path =  $request->{$fieldName.'_image'}->store('public/documents');
            if (!$path)
                return url('storage');
            $dirs = explode('/', $path);
            if ($dirs[0] === 'public')
                $dirs[0] = 'storage';
            $response['full_url'] = url(implode('/', $dirs));
            $response['image_name'] = ($request->{$fieldName.'_image'})->hashName();
            $response['path'] = (implode('/', $dirs));
            return $response;

        }
        catch (\Exception $e)
        {
            return $e;
            dd($e);
        }

    }
}