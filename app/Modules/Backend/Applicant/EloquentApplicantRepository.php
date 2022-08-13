<?php

use App\Modules\Backend\Applicant\ApplicantRepository;
use App\Modules\Framework\RepositoryImplementation;

class EloquentApplicantRepository extends RepositoryImplementation implements ApplicantRepository{

    protected $entity_name = "Applicant";

    public function getModel()
    {
        return new Applicant();
    }
}