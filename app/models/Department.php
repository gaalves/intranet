<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //

    protected $fillable = [
        'title', 
    ];



    public function users(){
    	return $this->hasMany('App\User', 'department_id', 'id');
    	// App\User , foreign_key, local_key
    }

    
}
