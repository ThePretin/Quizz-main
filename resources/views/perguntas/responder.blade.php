<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz de Futebol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Fonte esportiva --}}
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <style>
        body {
            background: url('{{ asset('images/fundo-perguntas.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Bebas Neue', sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            background: rgba(0, 0, 0, 0.8);
            border: 3px solid #FFD700;
            border-radius: 15px;
            padding: 40px;
            margin-top: 50px;
            box-shadow: 0 0 20px rgba(0, 255, 0, 0.5);
        }

        h1 {
            color: #00FF00;
            font-size: 60px;
            text-shadow: 3px 3px 8px #000;
        }

        h2 {
            color: #FFD700;
            text-shadow: 2px 2px 6px #000;
        }

        p {
            font-size: 22px;
            color: #ffffffcc;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid #00FF00;
            border-radius: 10px;
            padding: 20px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.03);
        }

        label {
            font-size: 20px;
            cursor: pointer;
        }

        .form-check-input {
            transform: scale(1.4);
            cursor: pointer;
        }

        .btn-primary {
            background-color: #FFD700;
            border: none;
            color: #000;
            font-size: 24px;
            font-weight: bold;
            border-radius: 10px;
            padding: 15px 40px;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #00FF00;
            color: #000;
            transform: scale(1.05);
        }
    </style>
</head>

<body>

    <div class="container text-center">
        <h1>⚽ Quiz de Futebol ⚽</h1>
        <p>Responda as perguntas abaixo e veja se você é craque dentro e fora de campo!</p>

        <form method="POST" action="{{ route('quizz.responder') }}">
            @csrf
            @foreach($perguntas as $pergunta)
                <div class="card mb-4 text-start">
                    <h2>{{ $pergunta->texto }}</h2>

                    <div class="p-2">
                        <div class="d-flex justify-content-start align-items-center gap-2 mb-2">
                            <input class="form-check-input" type="radio" name="{{ $pergunta->id }}" id="opcaoA_{{ $pergunta->id }}" value="A">
                            <label class="form-check-label" for="opcaoA_{{ $pergunta->id }}">A) {{ $pergunta->opcao_a }}</label>
                        </div>

                        <div class="d-flex justify-content-start align-items-center gap-2 mb-2">
                            <input class="form-check-input" type="radio" name="{{ $pergunta->id }}" id="opcaoB_{{ $pergunta->id }}" value="B">
                            <label class="form-check-label" for="opcaoB_{{ $pergunta->id }}">B) {{ $pergunta->opcao_b }}</label>
                        </div>

                        <div class="d-flex justify-content-start align-items-center gap-2 mb-2">
                            <input class="form-check-input" type="radio" name="{{ $pergunta->id }}" id="opcaoC_{{ $pergunta->id }}" value="C">
                            <label class="form-check-label" for="opcaoC_{{ $pergunta->id }}">C) {{ $pergunta->opcao_c }}</label>
                        </div>

                        <div class="d-flex justify-content-start align-items-center gap-2">
                            <input class="form-check-input" type="radio" name="{{ $pergunta->id }}" id="opcaoD_{{ $pergunta->id }}" value="D">
                            <label class="form-check-label" for="opcaoD_{{ $pergunta->id }}">D) {{ $pergunta->opcao_d }}</label>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="d-flex justify-content-center mt-4">
                <button class="btn btn-primary btn-lg">Enviar Respostas</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



