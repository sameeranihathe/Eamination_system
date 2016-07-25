<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {

	protected $table="departments";
    protected $fillable=['dept_name'];

    public function lecturer()
    {
        return $this->hasMany('App/Lecturer');
    }

    public function student()
    {
        return $this->hasMany('App/Student');
    }

}
