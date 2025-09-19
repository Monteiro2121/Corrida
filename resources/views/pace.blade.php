<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pace.css">
    <title>Cálculo do pace</title>
</head>
<body>

<div class="navbar">
    <img src="{{ asset('img/gov-sead.svg') }}" alt="Sead" class="logo">
    <a href="javascript:history.back()"><h5>Voltar</h5></a>
    <a href="{{ route('historico') }}"><h5>Histórico de corrida</h5></a>
    <a href="{{ route('imc') }}"><h5>Cálculo do imc</h5></a>
    <a href="{{ route('formulario') }}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="profile" title="Login" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg></a>
</div>

<div class="container">
    <img src="{{ asset('img/pace.jpg') }}" alt="Sead" class="pace">
    <div class="barra"></div>

    <form action="{{ route('calcular.pace') }}" method="POST">
        @csrf
        <input id="km" placeholder="Quilômetros andados:" type="text" name="km"
               value="{{ old('km', session('km')) }}" required />
        @error('km')
         <div class="error">{{ $message }}</div>
          @enderror

        <input id="time" placeholder="Minutos gastos:" type="text" name="time"
               value="{{ old('time', session('time')) }}" required />
        @error('time') 
        <div class="error">{{ $message }}</div> 
        @enderror

        <button type="submit">Calcular pace</button>
        
    </form>
    
</div>
@if(session('paceFormatado'))
        <p class="resultado">Seu pace é igual a: <strong>{{ session('paceFormatado') }}</strong></p>
    @endif
</body>
</html>

