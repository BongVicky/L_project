<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{


    protected $table = 'attendances';
    protected $fillable = ['emp_id','leave_date','return_date','numday','leave_type','reason'];
    public function emp(){
        return $this->belongsTo('App\Employee','emp_id','id');
    }
}