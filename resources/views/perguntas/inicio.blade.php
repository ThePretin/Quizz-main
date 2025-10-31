<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz de Futebol</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Fonte esportiva --}}
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <style>
        body {
            background: url('{{ asset('images/fundo-inicio.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Bebas Neue', sans-serif;
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            background: rgba(0, 0, 0, 0.75);
            margin: 150px auto;
            padding: 60px;
            max-width: 600px;
            border-radius: 15px;
            border: 3px solid #00FF00;
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.6);
        }

        h1 {
            font-size: 64px;
            color: #FFD700;
            text-shadow: 2px 2px 8px black;
        }

        p {
            font-size: 22px;
            color: #ffffffcc;
        }

        .lead {
            font-size: 24px;
            color: #00FF00;
        }

        .botao {
            display: inline-block;
            background: #00FF00;
            color: black;
            padding: 20px 50px;
            border: none;
            border-radius: 10px;
            font-size: 26px;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0 0 10px rgba(0, 255, 0, 0.8);
        }

        .botao:hover {
            background: #FFD700;
            color: black;
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.8);
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <h1>⚽ Quiz de Futebol ⚽</h1>
        <p class="lead">Teste seus conhecimentos com {{ $total_perguntas }} perguntas desafiadoras.</p>
        <p>Mostre que você é craque dentro e fora de campo!</p>
        <a href="{{ route('responder') }}" class="botao mt-4">Iniciar Quiz</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
