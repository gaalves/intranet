<?php


namespace App;


use Artesaos\Defender\Traits\HasDefender; // SISTEMA DE AUTENTICAÇÃO
use Illuminate\Foundation\Auth\User as Authenticatable;




class User extends Authenticatable
{
    use HasDefender;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'birthday', 'status', 'department_id', 'dt_admissao', 'imagem', 'reset',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = true;

    public function verifyUser(){
        return $this->hasOne('App\VerifyUser');
    }

    public function roles(){
        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
        //O terceiro argumento é o nome da chave estrangeira do modelo no qual você está definindo o relacionamento, enquanto o quarto argumento é o nome da chave estrangeira do modelo ao qual você está se juntando:
    }
    public function permissions(){
        return $this->belongsToMany('App\Permission', 'permission_user', 'user_id', 'permission_id');
        //O terceiro argumento é o nome da chave estrangeira do modelo no qual você está definindo o relacionamento, enquanto o quarto argumento é o nome da chave estrangeira do modelo ao qual você está se juntando:
    }

    public function companies(){
        return $this->belongsToMany('App\models\Company', 'user_companies', 'user_id', 'company_id')->withTimestamps();
        //O terceiro argumento é o nome da chave estrangeira do modelo no qual você está definindo o relacionamento, enquanto o quarto argumento é o nome da chave estrangeira do modelo ao qual você está se juntando:
    }

    public function departments(){
        return $this->BelongsTo('App\models\Department', 'department_id', 'id');
        //Se seu modelo pai não usa idcomo chave primária ou deseja unir o modelo filho a uma coluna diferente, você pode passar um terceiro argumento para o belongsTométodo que especifica a chave personalizada da sua tabela pai:
    }

    public function message(){
        return $this->hasMany('App\models\Message', 'user_id', 'id');
        //Se seu modelo pai não usa idcomo chave primária ou deseja unir o modelo filho a uma coluna diferente, você pode passar um terceiro argumento para o belongsTométodo que especifica a chave personalizada da sua tabela pai:
    }

}
