<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    

    public function scopeincomplete($query)

    {

    	return $query->where('completed', 0);
    }
}
