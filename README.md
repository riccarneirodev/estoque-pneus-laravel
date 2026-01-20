# Estoque de Pneus (Laravel)

## Visão geral
O **Estoque de Pneus** é uma aplicação Laravel voltada para o cadastro e o gerenciamento de caminhões e seus pneus. Atualmente, a base do projeto contempla telas simples (Blade) para listar e criar caminhões e pneus, além das estruturas de banco de dados para caminhões, pneus, eixos e posições. O objetivo é oferecer um ponto de partida para o controle de inventário e relacionamentos entre veículos e pneus em um ambiente logístico.

## Funcionalidades atuais
- **Cadastro e listagem de caminhões** (placa, modelo e quantidade de eixos).
- **Cadastro e listagem de pneus** com vínculo a um caminhão (código, marca, modelo, medida, vida e caminhão).
- **Migrations** para caminhões, pneus, eixos e posições, preparando o banco para evoluções futuras do domínio (como configuração de eixos e posições).

## Principais entidades
- **Caminhão**: registra placa, modelo e quantidade de eixos.
- **Pneu**: registra dados de identificação do pneu e referencia um caminhão.
- **Eixo**: estrutura de dados para organização de eixos por caminhão (previsto nas migrations).
- **Posição**: estrutura de dados para posições dentro de um eixo (previsto nas migrations).

## Rotas principais
As rotas abaixo já estão configuradas para caminhões e pneus:

- `GET /caminhoes` → lista caminhões
- `GET /caminhoes/create` → formulário de criação de caminhão
- `POST /caminhoes` → salva caminhão
- `GET /pneus` → lista pneus
- `GET /pneus/create` → formulário de criação de pneu
- `POST /pneus` → salva pneu

## Requisitos
- PHP 8.1+
- Composer
- Node.js e npm (para assets front-end via Vite)
- Banco de dados (MySQL, PostgreSQL ou outro compatível com Laravel)

## Como rodar localmente
1. Instale as dependências PHP:
   ```bash
   composer install
   ```
2. Copie o arquivo de ambiente e gere a chave:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
3. Configure o banco de dados no `.env`.
4. Rode as migrations:
   ```bash
   php artisan migrate
   ```
5. (Opcional) Instale as dependências front-end:
   ```bash
   npm install
   npm run dev
   ```
6. Suba o servidor de desenvolvimento:
   ```bash
   php artisan serve
   ```

## Estrutura do projeto (resumo)
- `app/Http/Controllers` → controllers de caminhões e pneus.
- `app/Models` → models do domínio (Caminhão, Pneu, Eixo, Posição).
- `database/migrations` → esquema de banco de dados.
- `resources/views` → telas Blade simples para CRUD básico.

## Próximos passos sugeridos
- Criar CRUD completo para **eixos** e **posições**.
- Adicionar validações e mensagens de erro mais amigáveis nos formulários.
- Melhorar o layout das páginas com um framework CSS (ex.: Tailwind, Bootstrap).
- Criar autenticação para controle de acesso.
