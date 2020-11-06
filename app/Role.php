<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function abilities()
    {
    	return $this->belongsToMany(Ability::class)->withTimestamps();
    }

    public function allowTo($ability)
    {
    	$this->abilities()->sync($ability);
    }
}
