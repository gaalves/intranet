@component('mail::message')

Último passo

@component('mail::button', ['url' => route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email) ])
Clique aqui para verificar sua conta
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
