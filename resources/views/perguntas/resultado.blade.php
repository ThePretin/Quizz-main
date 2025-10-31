<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado do Quiz de Futebol</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Fonte esportiva --}}
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <style>
        body {
            background: url('{{ asset('images/fundo-resultado.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Bebas Neue', sans-serif;
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            background: rgba(0, 0, 0, 0.8);
            max-width: 700px;
            margin: 120px auto;
            padding: 50px;
            border-radius: 15px;
            border: 3px solid #FFD700;
            box-shadow: 0 0 20px rgba(0,255,0,0.6);
        }

        h1 {
            font-size: 60px;
            color: #FFD700;
            text-shadow: 3px 3px 10px black;
        }

        h2 {
            font-size: 40px;
            color: #00FF00;
            text-shadow: 2px 2px 6px black;
        }

        p {
            font-size: 26px;
            margin: 20px 0;
        }

        .mensagem {
            font-size: 28px;
            margin-top: 15px;
        }

        .botao {
            background: #00FF00;
            color: black;
            border: none;
            padding: 15px 40px;
            border-radius: 10px;
            font-size: 22px;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
        }

        .botao:hover {
            background: #FFD700;
            color: black;
            transform: scale(1.05);
        }

        .trofeu {
            width: 100px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>🏆 Resultado Final 🏆</h1>

        <h2>Sua Pontuação: {{ $pontuacao }}</h2>

        {{-- Mensagens dinâmicas de acordo com o desempenho --}}
        @if($pontuacao >= 8)
            <p class="mensagem">🔥 Incrível! Você é um craque do futebol! 🔥</p>
        @elseif($pontuacao >= 5)
            <p class="mensagem">⚽ Muito bom! Você entende de futebol! ⚽</p>
        @else
            <p class="mensagem">😅 Bora treinar mais, hein? O técnico te espera no próximo jogo!</p>
        @endif

        <img src="{{ asset('images/trofeu.png') }}" alt="Troféu" class="trofeu">

        {{-- Botão para reiniciar o quiz --}}
        <div class="mt-4">
            <a href="{{ route('inicio') }}" class="botao">Jogar Novamente</a>
        </div>
    </div>

    {{-- Som de vitória --}}
    <audio id="vitoriaAudio" src="{{ asset('sounds/vitoria.mp3') }}" preload="auto"></audio>

    <script>
        // Toca o som de vitória ao carregar a página
        window.addEventListener('load', () => {
            const audio = document.getElementById('vitoriaAudio');
            audio.volume = 0.5; // volume moderado
            audio.play().catch(() => {
                // Caso o navegador bloqueie autoplay, podemos liberar após interação
                document.body.addEventListener('click', () => audio.play(), { once: true });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
