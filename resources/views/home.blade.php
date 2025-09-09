<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
</head>
<body>
    <div class="navbar">
        <img src="{{ asset('img/gov-sead.svg') }}" alt="Sead" class="logo">
        <a href="{{ route('imc') }}"><h5>Histórico de corrida</h5></a>
        <a href="{{ route('pace') }}"><h5>Cálculo do pace</h5></a>
        <a href="{{ route('imc') }}"><h5>Cálculo do imc</h5></a>
    </div>

    <div class="container">
    </div>
</body>
</html>