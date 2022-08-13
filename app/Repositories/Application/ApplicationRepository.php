<?php

namespace App\Repositories\Application;

use App\Repositories\Repository;
use ApplicantProfile;

class ApplicationRepository extends Repository{


    public function __construct(ApplicantProfile $model)
    {
        parent::__construct($model);
    }
}