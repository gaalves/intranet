<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
Use App\models\Email;

class CheckEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $email = $request->email;
        $count = Email::where('email', $email)->count();
        if($count >= 1){
            $count = User::where('email', $email)->count();
                if($count >= 1){
                    return redirect()->back();
                }else{
                    return $next($request);
                }
                
        }else{

            
            return redirect()->back();
        }
    }
}
