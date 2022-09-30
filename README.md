<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

### Teste técnico aplicado para vaga Desenvolvedor Fullstack.

Empresa: Melhor Câmbio

----------

# Início

## Instalação

Clone o repositório

    git clone https://github.com/kelver/challenge-melhor-cambio-api.git

Acesse a pasta do projeto

    cd ./challenge-melhor-cambio-api

Instale todas as dependências com o composer

    composer install

Copie o arquivo .env.example e faça as configurações de banco de dados necessárias.

    cp .env.example .env

Gere uma nova chave de aplicação

    php artisan key:generate

Execute as migrations para criar as tabelas no banco de dados. (**Necessário configuração do arquivo .env antes de executar as migrations**)

    php artisan migrate

Pode executar o servidor embutido, ou utilizar um servidor local como preferir.

    php artisan serve

Caso tenha usado o servidor embutido, pode acessar a api http://localhost:8000/api

Se tudo estiver ok, você deve ver uma mensagem na tela acessando a rota acima:

![screen-home-api](https://user-images.githubusercontent.com/22528943/193369169-996c6cd2-f16c-4972-ac49-8ce14336f21e.png)

Mais informações e detalhes, estou a disposição.

----------
