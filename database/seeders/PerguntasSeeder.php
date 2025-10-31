<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pergunta;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar perguntas de exemplo
        Pergunta::create([
            'texto' => 'Qual é a competição de seleções mais importante do mundo?',
            'opcao_a' => 'Copa do Mundo',
            'opcao_b' => 'Copa America',
            'opcao_c' => 'Eurocopa',
            'opcao_d' => 'Copa da Asia',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual clube venceu a Liga dos Campeões da UEFA em 22/23?',
            'opcao_a' => 'Liverpool',
            'opcao_b' => 'Bayern de Munique',
            'opcao_c' => 'Real Madrid',
            'opcao_d' => 'Manchester City',
            'resposta_correta' => 'D',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual seleção venceu a Copa do Mundo de 2018?',
            'opcao_a' => 'Brasil',
            'opcao_b' => 'França',
            'opcao_c' => 'Alemanha',
            'opcao_d' => 'Argentina',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual clube tem mais títulos da Liga dos Campeões da UEFA?',
            'opcao_a' => 'Milan',
            'opcao_b' => 'Barcelona',
            'opcao_c' => 'Real Madrid',
            'opcao_d' => 'Chelsea',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Em que ano foi realizada a primeira Copa do Mundo?',
            'opcao_a' => '1929',
            'opcao_b' => '1930',
            'opcao_c' => '1950',
            'opcao_d' => '1960',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        // 🔥 Novas 10 perguntas
        Pergunta::create([
            'texto' => 'Quem é o maior artilheiro da história das Copas do Mundo?',
            'opcao_a' => 'Pelé',
            'opcao_b' => 'Miroslav Klose',
            'opcao_c' => 'Ronaldo Fenômeno',
            'opcao_d' => 'Messi',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual país sediou a Copa do Mundo de 2014?',
            'opcao_a' => 'África do Sul',
            'opcao_b' => 'Brasil',
            'opcao_c' => 'Alemanha',
            'opcao_d' => 'Rússia',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual jogador ganhou a Bola de Ouro em 2021?',
            'opcao_a' => 'Cristiano Ronaldo',
            'opcao_b' => 'Karim Benzema',
            'opcao_c' => 'Lionel Messi',
            'opcao_d' => 'Robert Lewandowski',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual seleção venceu a Copa América de 2021?',
            'opcao_a' => 'Argentina',
            'opcao_b' => 'Brasil',
            'opcao_c' => 'Uruguai',
            'opcao_d' => 'Chile',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual foi o país campeão da Eurocopa 2016?',
            'opcao_a' => 'Espanha',
            'opcao_b' => 'França',
            'opcao_c' => 'Portugal',
            'opcao_d' => 'Itália',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem marcou o gol do título da Copa do Mundo de 2014?',
            'opcao_a' => 'Mario Götze',
            'opcao_b' => 'Thomas Müller',
            'opcao_c' => 'Lionel Messi',
            'opcao_d' => 'Neymar',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual seleção é conhecida como “Azzurra”?',
            'opcao_a' => 'Itália',
            'opcao_b' => 'França',
            'opcao_c' => 'Argentina',
            'opcao_d' => 'Uruguai',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quantas Copas do Mundo a seleção brasileira já venceu?',
            'opcao_a' => '4',
            'opcao_b' => '5',
            'opcao_c' => '6',
            'opcao_d' => '3',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual é o estádio mais famoso da Inglaterra?',
            'opcao_a' => 'Old Trafford',
            'opcao_b' => 'Anfield',
            'opcao_c' => 'Wembley',
            'opcao_d' => 'Etihad Stadium',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual jogador foi conhecido como “O Fenômeno”?',
            'opcao_a' => 'Ronaldinho Gaúcho',
            'opcao_b' => 'Ronaldo Nazário',
            'opcao_c' => 'Romário',
            'opcao_d' => 'Zidane',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);
    }
}
