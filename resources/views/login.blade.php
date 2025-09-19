<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <title>Login</title>
</head>
<body>
<div class="background-wrapper">
    <header>
        <h1>Login</h1>
    </header>
    @csrf
    <a href="{{ route('home') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="gray" class="voltar" title="voltar" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
</svg></a>
    <div class="table">
    <section>
    <form action="{{ route('login.store') }}" method="POST">
    @csrf 
    <input type="email" placeholder="Email" name="email" required>
    <input type="password" placeholder="Senha" name="password" required>
    <input type="submit" value="Entrar">
    <a href="{{ route('formulario') }}">Ainda não possuo uma conta</a>
</form>

</section>
</div>
</div>
</body>
</html>