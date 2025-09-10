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
    <a href="{{ route('home') }}"><h5>Página inicial</h5></a>
    <a href="{{ route('imc') }}"><h5>Histórico de corrida</h5></a>
    <a href="{{ route('imc') }}"><h5>Cálculo do imc</h5></a>
</div>

<div class="container">
    <img src="{{ asset('img/pace.jpg') }}" alt="Sead" class="pace">

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

