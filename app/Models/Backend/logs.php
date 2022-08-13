<?php

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model{
    protected $table = 'logs';
    protected $fillable = ['status','remarks','state', 'created_by','applicant_profile_id', 'type' ];

    public function user(){
        return $this->belongsTo(User::class,'created_by');
    }
}