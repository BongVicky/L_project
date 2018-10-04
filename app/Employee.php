<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $table = 'employees';
    protected $fillable = [
        'emp_id', 'firstname', 'lastname', 'gender', 'dob', 'hire_date', 'position', 'email', 'number', 'monthly_leave', 'status',
    ];
    public $primaryKey = 'id';
    public function attendances()
    {
        return $this->hasMany('App\Attendance', 'emp_id', 'id');
    }

    public function contracts()
    {
        return $this->hasMany('App\Contracts', 'emp_id', 'id');
    }
//    public function leave(){
//        return $this->hasMany('Leaves');
//    }
    public function performance()
    {
        return $this->hasMany('\App\Performances', 'emp_id', 'id');
    }


    public function employees()
    {
        return $this->hasMany('App\Attendance', 'emp_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id', 'id');
    }

    public function admin()
    {

        return $this->belongsTo('App\Admin', 'email', 'email');
    }

    public function request()
    {
        return $this->hasMany('App\Requests', 'emp_id', 'id');
    }
}
