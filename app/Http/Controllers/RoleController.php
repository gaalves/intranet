<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Role;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Response;

class RoleController extends Controller
{
    //
    public function index(){
        //return view('controleAcesso.roles.role');
    }
    public function listarroles(Request $request){
        return datatables(Role::all())->toJson();
    }
}
