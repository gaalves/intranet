<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\Datatables\Datatables;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Response;

class UserController extends Controller
{
    //
    public function index(){
    	$users = User::all();

    	return view('users.users');
    }
    public function listarusers(Request $request){
    	return datatables(User::all())->toJson();
    }

    public function store(UserStoreRequest $request){
    	$validator = $request->all();

    	if($validator->passes()){
    		$user = User::create($request->all());
    		return response()->json($user);
    	}

    	return response()->json([
    		'error'=>$validator->errors()->all()
    	]);

    }

    
}
