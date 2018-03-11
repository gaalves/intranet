<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class MessageDetail extends Model
{
    //
     protected $fillable = [
        'message', 'read', 'viewed', 'read_date', 'view_date', 'department_id',
    ];



    public function users(){
    	return $this->hasMany('App\User', 'department_id', 'id');
    	// App\User , foreign_key, local_key
    }

    
}
