<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

	protected $table='students';

    protected $fillable=['d_id','ep_no','name','reg_no','batch'];


}
