<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    protected $fillable = array('emp_id', 'p_name','salary', 'from_date', 'to_date');
    public function employee(){
        return $this->belongsTo('App\Employee','emp_id','id');
    }
    public function cron(){
        return $this->hasOne('App/Cron','contract_id','id' );
    }
    public function user(){
        return $this->belongsTo('\App\User','emp_id', 'id');
    }
}
