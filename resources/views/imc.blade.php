<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/imc.css') }}" />
    <title>Cálculo do IMC</title>
    <!-- JQuery e máscara -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body>
    <div class="navbar">
        <img src="{{ asset('img/gov-sead.svg') }}" alt="Sead" class="logo" />
        <a href="{{ route('home') }}"><h5>Voltar</h5></a>
        <a href="{{ route('imc') }}"><h5>Histórico de corrida</h5></a>
        <a href="{{ route('pace') }}"><h5>Cálculo do pace</h5></a>
    </div>

    <div class="container">
        <form action="{{ route('imc') }}" method="POST">
            @csrf

            <input id="altura" placeholder="Sua altura em metros:" type="text" name="altura" value="{{ old('altura', $altura ?? '') }}" required />
            @error('altura')
                <div class="error">{{ $message }}</div>
            @enderror

            <input id="peso" placeholder="Seu peso em kilos:" type="text" name="peso" value="{{ old('peso', $peso ?? '') }}" required />
            @error('peso')
                <div class="error">{{ $message }}</div>
            @enderror

            <input placeholder="Seu IMC é igual a..." value="{{ $imcFormatado ?? '' }}" disabled/>

            <button type="submit">Calcular IMC</button>
        </form>

        <h2>Importante!</h2> 
        <h3> O cálculo do IMC é um padrão internacional para adultos e não considera a composição corporal, como massa muscular. </h3>
         <h1>Tabela de IMC</h1> 
         <h4> 
         <p>Peso normal: Entre 18,5 e 24,9</p> 
         <p>Sobrepeso: Entre 25 e 29,9</p>
          <p>Magreza: Abaixo de 18,5</p> 
          <p>Obeso: 30,0 ou mais</p> 
        </h4>
    </div>

    <script>
    $(document).ready(function(){
        $('#altura').mask('0,00');
    });
    $(document).ready(function(){
        $('#peso').mask('000');
    });
    </script>
</body>
</html>
