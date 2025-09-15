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
        <a href="{{ route('home') }}"><h5>Voltar para a página inicial</h5></a>
    </div>

    <div class="container">
        <div class="barra"></div>
        @auth
    <div class="historico-corridas">
        @if($corridas->count() > 0)
            <h3>Corridas que você participou:</h3>
            <table>
                <thead>
                    <tr>
                        <th>Nome da Corrida</th>
                        <th>Pace</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($corridas as $corrida)
                        <tr>
                            <td>{{ $corrida->nome }}</td>
                            <td>{{ $corrida->pace }}</td>
                            <td>{{ $corrida->data->format('d/m/Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Você ainda não tem nenhuma corrida registrada.</p>
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
