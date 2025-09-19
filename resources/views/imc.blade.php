<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/imc.css') }}" />
    <title>Cálculo do IMC</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<body>
    <div class="navbar">
        <img src="{{ asset('img/gov-sead.svg') }}" alt="Sead" class="logo"/>
        <a href="javascript:history.back()"><h5>Voltar</h5></a>
        <a href="{{ route('historico') }}"><h5>Histórico de corrida</h5></a>
        <a href="{{ route('pace') }}"><h5>Cálculo do pace</h5></a>
        <a href="{{ route('formulario') }}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="profile" title="Login" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg></a>
    </div>

    <div class="container">
    <img src="{{ asset('img/imc.webp') }}" alt="Imc" class="imc"/>
    <div class="barra"></div>
     <form action="{{ route('calcular.imc') }}" method="POST">
            @csrf
            <input id="altura" placeholder="Sua altura em metros:" type="text" name="altura" 
            value="{{ old('altura', session('altura')) }}" required />
            @error('altura')
                <div class="error">{{ $message }}</div>
            @enderror

            <input id="peso" placeholder="Seu peso em kilos:" type="text" name="peso"  
            value="{{ old('peso', session('peso')) }}" required />
            @error('peso')
                <div class="error">{{ $message }}</div>
            @enderror
            
            <button type="submit">Calcular IMC</button>

        </form>

        
    </div>

    @if(session('imcFormatado'))
        <p class="resultado">Seu imc é igual á: <strong>{{ session('imcFormatado') }}</strong></p>
    @endif

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
