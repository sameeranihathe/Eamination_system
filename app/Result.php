<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model {

	protected $table="results";

    protected $fillable=[];

    public function student()
    {
        return $this->belongsTo('App/Student');
    }

    public function lecturer()
    {
        return $this->belongsTo('App/Lecturer');
    }
}
