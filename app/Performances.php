<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performances extends Model
{
    protected $fillable = array('emp_id','job_knowledge','work_quality','attendance','com_listen','dependability');
    public function employee(){
        return $this->belongsTo('App\Employee','emp_id','id');
    }
}
