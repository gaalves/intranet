<!DOCTYPE html>
<html>
<head>
    <title>Email de boas-vindas</title>
</head>
 
<body>
<h2>Bem-vindo ao site {{$user['name']}}</h2>
<br/>
Seu endereço de e-mail cadastrado é {{$user['email']}} , clique no link abaixo para verificar sua conta de e-mail
<br/>
<a href="{{url('user/verify', $user->verifyUser->token)}}">Verificar E-mail</a>
</body>
 
</html>