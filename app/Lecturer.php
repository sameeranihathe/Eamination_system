<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model {

	protected $table ='lecturers';

    protected $fillable=['name'];

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    public function department()
    {
        return $this->belongsTo('App/Department');
    }


}
