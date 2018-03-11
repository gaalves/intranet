<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Response;

use App\User;
class ControleAcessoController extends Controller
{
    //
    public function index(){


        return view('controleAcesso.controleAcesso');
    }
    public function listar_controle_acesso(Request $request){


            $query = User::with('companies', 'roles')->selectRaw('distinct users.*');


        return Datatables($query)
            ->add_column('roles', function($user) {
                return $user->roles->count();
            })
            ->remove_column('id')
            ->make();

    }
}
