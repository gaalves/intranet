<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //

    protected $fillable = [
        'name', 'readable_name',
    ];



    public function users(){
    	return $this->belongsToMany('App\User', 'permission_user', 'role_id', 'user_id');
    	// Além de personalizar o nome da tabela de junção, você também pode personalizar os nomes das colunas na tabela passando argumentos adicionais para o belongsToManymétodo. O terceiro argumento é o nome da chave estrangeira do modelo no qual você está definindo o relacionamento, enquanto o quarto argumento é o nome da chave estrangeira do modelo ao qual você está se juntando:
    }
    public function permissions(){
    	return $this->belongsToMany('App\permission', 'permission_role', 'role_id', 'permission_id');
    	// App\User , foreign_key, local_key
    }
}
