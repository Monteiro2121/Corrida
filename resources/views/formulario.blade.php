<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}" />
    <title>Cadastro</title>
</head>
<body>
<div class="background-wrapper">
    <header>
    <h1>Cadastre-se</h1>
    </header>
    <section>
        <form action="{{ route('formulario.store')  }}" method="post">
            @csrf
            <input type="text" placeholder="Nome competo" id="name" name="name">
            <input type="text" placeholder="Email" id="email" name="email">
            <div class="container">
            <input type="date" id="age" name="age">
            <input type="password" name="password" id="password" placeholder="Senha">
            </div>
            <input type="submit" value="Cadastrar">
            <a href="login">Já possuo uma conta</a>
        </form>
    </section>
    </div>
</body>
</html>