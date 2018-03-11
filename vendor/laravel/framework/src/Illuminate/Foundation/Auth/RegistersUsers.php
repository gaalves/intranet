<?php

namespace Illuminate\Foundation\Auth;

use Artesaos\Defender\Traits\HasDefender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\models\Company;
use App\models\Department;
use App\User;

// Para Verificação Por Email
use Jrean\UserVerification\Traits\VerifiesUsers;
use Jrean\UserVerification\Facades\UserVerification;
use Jrean\UserVerification\UserVerificationServiceProvider;


trait RegistersUsers
{
    use RedirectsUsers;
    use VerifiesUsers; //Para Verificação de Email
    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $companies = Company::all();
        $departments = Department::all();
        return view('vendor.adminlte.register', compact('companies', 'departments'));
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        $user->roles()->attach(12);
        $user->companies()->attach($request->company_id);

        event(new Registered($user));



        UserVerification::generate($user);

        UserVerification::send($user, 'Código de Verificação Grupo Med');

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
