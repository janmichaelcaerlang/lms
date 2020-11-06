<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [ 'name', 'acronym' ];

    public function subjects()
    {
    	return $this->belongsToMany(Subject::class)->withTimestamps();
    }
}
