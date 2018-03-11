<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
 
    protected $fillable = [
        'title', 
    ];

    
   public $timestamps = true;

    public function users(){
        return $this->belongsToMany('App\User', 'user_companies', 'company_id', 'user_id')->withTimestamps();
        //O terceiro argumento é o nome da chave estrangeira do modelo no qual você está definindo o relacionamento, enquanto o quarto argumento é o nome da chave estrangeira do modelo ao qual você está se juntando:
    }
}
