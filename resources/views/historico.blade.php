<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/historico.css">
    <title>Histórico de Corridas</title>
</head>
<body>
    <div class="navbar">
        <img src="{{ asset('img/gov-sead.svg') }}" alt="Sead" class="logo">
        <a href="javascript:history.back()"><h5>Voltar</h5></a>
    </div>

    <div class="container">
        <div class="barra"></div>

        @if($corridas->count() > 0)
            <h3>Suas corridas:</h3>
            <ul>
                @foreach($corridas as $corrida)
                    <li>
                        <strong>Nome:</strong> {{ $corrida->nome }} |
                        <strong>Data:</strong> {{ $corrida->data->format('d/m/Y') }} |
                        <strong>Pace:</strong> {{ $corrida->pace }}
                    </li>
                @endforeach
            </ul>
        @else
            <p>Você ainda não tem nenhuma corrida registrada.</p>
        @endif

        <div class="adicionar-corrida">
            <h3>Adicionar Corrida</h3>
            <form action="{{ route('corridas.store') }}" method="POST">
                @csrf
                <label>Nome da Corrida:</label>
                <input type="text" name="nome" required><br><br>

                <label>Data:</label>
                <input type="date" name="data" required><br><br>

                <label>Pace:</label>
                <input type="text" name="pace" required><br><br>

                <button type="submit">Salvar Corrida</button>
            </form>
        </div>

    </div>
</body>
</html>
