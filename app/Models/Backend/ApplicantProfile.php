<?php

use App\Models\User;
use App\Models\Backend\logs;
use Illuminate\Database\Eloquent\Model;

class ApplicantProfile extends Model{
    protected $table = 'applicant_profile';
    protected $fillable = ['first_name','middle_name','last_name', 'first_name_nepali','middle_name_nepali','last_name_nepali',
    'dob_english','dob_nepali','father_name','mother_name','grandfather_name','citizenship_number',
    'issued_district','passport_number','blood_group','citizenship_front','citizenship_back','profile_picture','signature','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function logs(){
        return $this->hasMany(Logs::class);
    }
}