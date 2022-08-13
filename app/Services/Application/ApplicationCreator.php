<?php

namespace App\Services\Application;

use App\Repositories\Application\ApplicationRepository;
use Exception;
use Illuminate\Database\DatabaseManager;
use Illuminate\Http\Request;

class ApplicationCreator{

    protected $applicationRepository;


    protected $databaseManager; 

    public function __construct(
        ApplicationRepository $applicationRepository,
        DatabaseManager $databaseManager
     )
    {
        $this->applicationRepository = $applicationRepository;
        $this->databaseManager = $databaseManager;
    }

    /** 
     *  @param Request $request
     * @return Model
      * @Throws \Throwable  
    */
    public function store(Request $request){
        $this->databaseManager->beginTransaction();
        try{
            $formRequest = $request->all();
            $application = $this->applicationRepository->store($formRequest);
        }catch (Exception $exception){
            $this->databaseManager->rollback();
            throw new Exception($exception->getMessage());
        }
        return $application;

    }
}