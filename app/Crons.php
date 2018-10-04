<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crons extends Model
{
    protected $fillable = array('contract_id', 'send');

    public function contract(){
        return $this->belongsTo('App\Contract','id','contract_id');
    }
}
