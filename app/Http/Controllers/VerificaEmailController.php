<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Email;
use App\User;
class VerificaEmailController extends Controller
{
    //
    public function verifica(Request $request){
    	$email = $request->email;

        $dataMail = explode('@', $email);
        $serverMail = $dataMail[1];



        if($serverMail == 'grupomed.com.br'){
            //return "EMAIL TEM @GRUPOMED.COM.BR";
            $count = Email::where('email', $email)->count();
            if($count >= 1){
                $count = User::where('email', $email)->count();
                
                    if($count >= 1){
                        return redirect()->back();
                        //return "JÁ TEM USUÁRIO CADASTRADO COM ESSE EMAIL";
                    }else{
                        return redirect()->route('register', ['email' => $email]);
                        //return "NÃO TEM USUÁRIO CADASTRADO COM ESSE EMAIL";
                    }
                    
            }else{
                Email::create($request->all());
                return redirect()->route('register', ['email' => $email]);
                //return "EMAIL NÃO TEM NA BASE DE DADOS";
            }

        }else{
            return redirect()->back();
            //return "EMAIL NÃO É @GRUPOMED";
    	

        }
    }
}
