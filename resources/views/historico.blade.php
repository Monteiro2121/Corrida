<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/historico.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <title>Histórico de Corridas</title>
</head>
<body>
<div class="navbar">
        <img src="{{ asset('img/gov-sead.svg') }}" alt="Sead" class="logo">
        <a href="{{ route('home') }}"><h5>Voltar</h5></a>
        <a href="{{ route('formulario') }}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="profile" title="Login" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
    </svg></a>
    </div>
    <div class="container">
        <div class="barra"></div>
        @auth
        <div class="historico-corridas">
    @if($corridas->count() > 0)
        <h3>Corridas que você participou: {{ $corridas->count() }}</h3>
        @foreach($corridas as $corrida)
            <div class="corrida-item">
                <p><strong>Nome da Corrida:</strong> {{ $corrida->nome }}</p>
                <p><strong>Pace:</strong> {{ $corrida->pace }}</p>
                <p><strong>Data:</strong> {{ \Carbon\Carbon::parse($corrida->data)->format('d/m/Y') }}</p>
            </div>
        @endforeach
        @else
            <p>Você ainda não tem nenhuma corrida registrada</p>
        @endif
    </div>
    @endauth
            <button class="btn-adicionar" id="openModal">Adicionar Corrida</button>
            <div class="modal" id="corridaModal">
            <div class="modal-content">
                <button class="close-btn" id="closeModal">&times;</button>
                <h3>Adicionar Corrida</h3>
                <form action="{{ route('corridas.store') }}" method="POST">
                    @csrf
                    <input type="text" name="nome" placeholder="Nome da corrida" class="input-nome" required><br><br>
                    <input type="date" name="data" class="input-data" required><br><br>
                    <input type="text" name="pace" placeholder="Seu pace" class="input-pace" required><br><br>
                    <button type="submit" class="btn-salvar">Salvar Corrida</button>
                </form>
            </div>
        </div>
        @guest
            <div class="modal" id="loginModal" style="display:flex;">
                <div class="modal-content">
                    <h2>Você precisa estar logado para acessar esta página</h2>
                    <a href="/login" class="btn-login">Entrar</a>
                    <a href="/cadastro" class="btn-register">Cadastrar</a>
                </div>
            </div>
        @endguest
    </div>

    <script>
        const openModalBtn = document.getElementById('openModal');
        const closeModalBtn = document.getElementById('closeModal');
        const modal = document.getElementById('corridaModal');

        openModalBtn.addEventListener('click', () => {
            modal.style.display = 'flex';
        });

        closeModalBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    </script>
</body>
</html>
