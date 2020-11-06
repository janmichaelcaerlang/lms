<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [ 'code', 'title', 'units', 'lecture', 'lab', 'prerequisite' ];

    public function courses()
    {
    	return $this->belongsToMany(Course::class)->withTimestamps();
    }
}
