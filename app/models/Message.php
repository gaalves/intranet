<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
     protected $fillable = [
        'title', 'message', 'urgency', 'importance', 'behalf_of_department', 'sent_date', 'sender', 'draft', 'type_send', 'user_id',
    ];



    public function users(){
    	return $this->hasMany('App\User', 'department_id', 'id');
    	// App\User , foreign_key, local_key
    }
}
