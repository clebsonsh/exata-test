<p align="center"><img src="https://raw.githubusercontent.com/clebsonsh/exata-test/master/public/img/logo.png" width="100"></p>

# Exata IT - Processo Seletivo - Desenvolvedor Pleno Laravel

## Teste Desenvolvedor Pleno Laravel

> **Objetivo**: Desenvolver um aplicação usando Laravel e Vue.

> > Montando o ambiente / boilerplate:

-   [x] Criar uma nova aplicação web com Laravel 10.

-   [x] Configurar BD MySQL.

-   [x] Adicionar o pacote Breeze.

-   [x] Adicionar suporte ao Vue com SSR.

-   [x] Adicionar pacote Bouncer para controle de roles de usuário (https://github.com/JosephSilber/bouncer).

> > Customizando a aplicação:

-   [x] Desenvolver Seeder para criar um usuário “admin@exata.it” no role “superadmin” e uma senha aleatória que deve ser apresentada no console ao migrar.

-   [x] Desabilitar a funcionalidade de registro de novos usuários completamente.

-   [x] Desenvolver uma tela com Vue para CRUD de usuários acessível apenas ao role “superadmin”.

-   [x] Utilizar o pacote Tailwind (https://tailwindcss.com/) para estilos.

-   [ ] Utilizar o pacote PrimeVue (https://primevue.org/setup) para os componentes: DataTable, Input (group, text, number,etc), Button, etc.

-   [ ] Menu lateral à esquerda (ocupando a tela).

-   [x] Barra no topo com nome do usuário e dropdown para logout.

## COMO RODAR O APP LOCAL

> **Pré-requisitos**:

> > :heavy_exclamation_mark: **Procedimentos testados na linha de comando do Linux**

-   [Git](https://git-scm.com/downloads)

-   [PHP ^8.2](https://www.php.net/downloads.php)

-   [Composer](https://getcomposer.org/), para fazer a instalação das dependêcias

-   [Docker](https://docs.docker.com/get-docker/), para rodar a aplicação usando o [Laravel Sail](https://laravel.com/docs/9.x/sail)

> **Download e instalação**:

-   Clone o repositório

> > `git clone git@github.com:clebsonsh/exata-test.git`

-   Vá para pasta do APP

> > `cd exata-test`

-   Instale as dependências PHP

> > `composer install`

-   Crie o arquivo _.env_ baseado no _.env.example_ (nesse arquivo já estão as configurações do banco de dados do docker)

> > `cp .env.example .env`

-   Gere a APP_KEY

> > `php artisan key:generate`

-   Inicie os containers Docker através do Laravel Sail (a primeira vez que rodar esse comando pode demorar, pois vai baixar e configurar todos containers usados pelo APP)

> > `./vendor/bin/sail up -d`

-   Instale as dependências JavaScript

> > `./vendor/bin/sail yarn install`

-   Rode a build dos assets JavaScript e CSS

> > `./vendor/bin/sail yarn build`

-   Rode as migrations com as seeds a senha de admin vai aparecer no terminal quando rodar esse comando

> > `./vendor/bin/sail artisan migrate:fresh --seed`

-   Rode o servidor de SSR

> > `./vendor/bin/sail artisan inertia:start-ssr`

A partir desse ponto o APP já estará rodando. O servidor local, o NodeJS e banco de dados MySQL não precisam ser instalados, pois tudo será provido pelo Docker/Lravel Sail.

## COMO USAR O APP LOCAL

O app pode ser acessado em http://127.0.0.1

O mailpit pode ser acessado em http://127.0.0.1:8025 que é para onde vão os e-mail de recuperação de senha no ambiente de desenvolvimento

No canto superior direito da home tem link para, já existe um Admin criado quando rodamos as seeds e outros usuários para teste

Assim que logar você será redirecionado a parte administrativa do app, onde é possível criar, editar e deletar usuários

## STACK USADA

-   PHP
-   JavaScript
-   HTML
-   CSS
-   Laravel
-   VueJS
-   TailwindCSS
-   MySQL
-   Docker

## OBESERVAÇÔES

Não usei o PrimeVue, até tentei usar, gastei um bom tempo tentando entender como PrimeVue funciona mas não consegui fazer a integração dele. Acabei decidindo seguir sem esse pacote e entregar a funcionalidade do app
