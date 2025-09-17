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
        <a href="{{ route('historico') }}"><h5>Histórico de corrida</h5></a>
        <a href="{{ route('pace') }}"><h5>Cálculo do pace</h5></a>
        <a href="{{ route('imc') }}"><h5>Cálculo do imc</h5></a>
        <a href="{{ route('formulario') }}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="profile" title="Login" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
    </svg></a>
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
        <p class="principal">Benefícios da corrida</p>
        <p>Correr é uma prática simples, acessível e extremamente eficaz para melhorar a qualidade de vida.<br>
        Além dos ganhos físicos, ela promove equilíbrio mental e emocional,<br>
        tornando-se uma excelente ferramenta para saúde integral.</p>

        <h4>Benefícios Mentais e emocionais da corrida</h4>

        <div class="autoestima">
  <div class="texto">
      <h6>-Melhora da autoestima e autoconfiança</h6>
      <p class="beneftextaut">
          Superar metas de corrida, mesmo pequenas, <br>
          contribui para uma <strong>sensação de conquista</strong>,
          fortalecendo a autoconfiança.
          <br>
          O impacto positivo no corpo também pode melhorar a <strong>imagem corporal e a percepção de si mesmo.</strong>
      </p>
  </div>
  <div class="imagem">
      <img src="img/benef2.png" alt="Corrida autoestima">
  </div>
</div>

    </div>
    </div>
</body>
</html>