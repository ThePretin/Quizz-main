# Projeto Quizz Laravel

Este é um projeto de um aplicativo de quiz desenvolvido em Laravel para testar conhecimentos em diversas áreas. O aplicativo apresenta perguntas de múltipla escolha com interface responsiva usando Bootstrap.

## 📋 Funcionalidades

- ✅ Perguntas de múltipla escolha
- ✅ Interface responsiva com Bootstrap
- ✅ Sistema de pontuação
- ✅ Suporte a imagens nas perguntas
- ✅ Banco de dados com seeders para perguntas de exemplo

## 🛠 Tecnologias Utilizadas

- **Backend:** Laravel 12.x
- **Frontend:** Bootstrap 5.3.8, Blade Templates
- **Banco de Dados:** MySQL
- **Build Tools:** Vite, TailwindCSS
- **PHP:** 8.2+

## 📦 Instalação e Configuração

### Pré-requisitos

- PHP 8.2 ou superior
- Composer
- MySQL
- Node.js (para assets)

### 1. Clonando o Repositório

```bash
git clone https://github.com/olucassantos/Quizz.git
cd Quizz
```

### 1.1. Criando projeto do Zero

```bash
composer create-project laravel/laravel Quizz
cd Quizz
```

### 2. Instalando Dependências

```bash
# Instalar dependências do PHP
composer install

# Instalar dependências do Node.js
npm install
```

### 3. Configuração do Ambiente

```bash
# Copiar arquivo de configuração
cp .env.example .env

# Gerar chave da aplicação
php artisan key:generate
```

### 4. Configuração do Banco de Dados

Edite o arquivo `.env` e configure as credenciais do seu banco de dados:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=quizzbase
DB_USERNAME=root
DB_PASSWORD=sua_senha_aqui
```

### 5. Executar Migrações e Seeders

```bash
# Executar migrações
php artisan migrate

# Popular banco com perguntas de exemplo
php artisan db:seed --class=PerguntasSeeder
```

### 6. Iniciar o Servidor

```bash
# Servidor PHP
php artisan serve

# Em outro terminal, compilar assets (opcional)
npm run dev
```

Acesse a aplicação em: `http://localhost:8000`

## 🗂 Estrutura do Projeto

### Estrutura de Arquivos Principais

```
Quizz/
├── app/
│   ├── Http/Controllers/
│   │   └── PerguntaController.php
│   └── Models/
│       └── Pergunta.php
├── database/
│   ├── migrations/
│   │   └── 2025_10_21_223105_create_perguntas_table.php
│   └── seeders/
│       └── PerguntasSeeder.php
├── resources/
│   └── views/
│       └── perguntas/
│           ├── inicio.blade.php
│           └── responder.blade.php
├── routes/
│   └── web.php
└── .env.example
```

## 📚 Tutorial: Criando o Projeto do Zero

### 1. Criação do Projeto Laravel

```bash
composer create-project laravel/laravel Quizz
cd Quizz
```

### 2. Criação do Modelo e Migração

```bash
php artisan make:model Pergunta -m
```

#### Configurar a Migração (`database/migrations/xxxx_create_perguntas_table.php`):

```php
public function up(): void
{
    Schema::create('perguntas', function (Blueprint $table) {
        $table->id();
        $table->string('texto');
        $table->string('opcao_a');
        $table->string('opcao_b');
        $table->string('opcao_c');
        $table->string('opcao_d');
        $table->string('resposta_correta');
        $table->string('imagem')->nullable();
        $table->integer('pontos')->default(1);
        $table->timestamps();
    });
}
```

#### Configurar o Modelo (`app/Models/Pergunta.php`):

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model
{
    protected $table = 'perguntas';

    protected $fillable = [
        'texto',
        'opcao_a',
        'opcao_b',
        'opcao_c',
        'opcao_d',
        'resposta_correta',
        'imagem',
        'pontos',
    ];
}
```

### 3. Criação do Seeder

```bash
php artisan make:seeder PerguntasSeeder
```

O seeder já está configurado com 5 perguntas de exemplo sobre geografia, astronomia, literatura, química e história.

### 4. Criação do Controlador

```bash
php artisan make:controller PerguntaController
```

O controlador possui dois métodos:
- `inicio()`: Exibe a página inicial com contador de perguntas
- `responder()`: Exibe todas as perguntas do quiz

### 5. Configuração das Rotas

No arquivo `routes/web.php`:

```php
use App\Http\Controllers\PerguntaController;

Route::get('/', [PerguntaController::class, 'inicio'])->name('inicio');
Route::get('/responder', [PerguntaController::class, 'responder'])->name('responder');
```

### 6. Criação das Views

#### Pasta `resources/views/perguntas/`:
- `inicio.blade.php`: Página inicial de boas-vindas
- `responder.blade.php`: Página com todas as perguntas do quiz

### 7. Executar Migrações e Seeders

```bash
php artisan migrate
php artisan db:seed --class=PerguntasSeeder
```

## 🚀 Como Usar

1. Acesse a página inicial em `http://localhost:8000`
2. Clique em "Iniciar Quiz"
3. Responda as perguntas selecionando uma das opções
4. Clique em "Enviar Respostas" (funcionalidade em desenvolvimento)

## 🔄 Próximos Passos

- [ ] Implementar processamento das respostas
- [ ] Sistema de pontuação em tempo real
- [ ] Página de resultados
- [ ] Upload de imagens para perguntas
- [ ] Sistema de categorias
- [ ] Painel administrativo

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## 👨‍💻 Desenvolvedor

Desenvolvido por [Lucas Santos](https://github.com/olucassantos)

---

### 🤝 Contribuindo

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request
