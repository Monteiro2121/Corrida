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
        <div class="barra"></div>
    <img src="{{ asset('img/corrida.jpg') }}" alt="Corrida" class="corrida" />
    
    <h1>Benefícios da corrida</h1>
    
    <h2> - Melhora do condicionamento cardiovascular 
        <br>
        <br>
         - Fortalecimento ósseo e <br> muscular 
         <br>
        <br>
         - Controle do peso <br>
         <br>
         - Melhora do humor e da função cerebral
         <br>
         <br>
         - Redução do estresse e <br> 
          ansiedade através da liberação <br>
          de endorfina
    </h2>
    </div>

    <div class="linha"></div>

    <div class="beneficios">
        <h2>- Benefícios da corrida -</h2>
        <h3>Correr é uma prática simples, acessível e extremamente eficaz para melhorar a qualidade de vida. Além dos ganhos físicos, ela promove equilíbrio mental e emocional,<br>
        tornando-se uma excelente ferramenta para saúde integral.</h3>
    </div>
</body>
</html>