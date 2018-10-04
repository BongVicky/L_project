<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $fillable = [
        'emp_id','numberofday', 'leave_date','return_date','leave_type','reason',
    ];
    public function employee(){
        return $this->belongsTo('App\Employee');
    }
    public function user(){
        return $this->belongsTo('\App\User');
    }
}
