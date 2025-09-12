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
    <div class="table">
    <section>
    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <input type="email" placeholder="Email" name="email" required>
        <input type="password" placeholder="Senha" name="password" required>
        <input type="submit" value="Entrar">
        <a href="formulario">Ainda não possuo uma conta</a>
    </form>
</section>
</div>
</div>
</body>
</html>