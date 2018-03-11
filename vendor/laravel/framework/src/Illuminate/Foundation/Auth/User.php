<?php

namespace Illuminate\Foundation\Auth;

use Artesaos\Defender\Traits\HasDefender;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

//Para Verificação Por Emails
use Jrean\UserVerification\Traits\UserVerification;
use Jrean\UserVerification\Traits\RedirectsUsers;
use Jrean\UserVerification\Traits\VerifiesUsers;


class User extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, HasDefender, Notifiable;
}
