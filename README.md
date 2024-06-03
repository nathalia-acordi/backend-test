# backend-test

## Descrição

Este projeto trata-se de uma aplicação voltada para a gestão de informações de pessoas e contatos. Ele oferece funcionalidades de consulta e pesquisa, permitindo que os usuários visualizem e busquem registros específicos. Além disso, o sistema possui operações de CRUD (Cadastrar, Visualizar, Alterar, Excluir) tanto para pessoas quanto para contatos, assegurando uma gestão completa dos dados.

## Como executar

Para executar este projeto, você deve ter instalado em sua máquina PHP, Composer e Postgres (ou outro banco de dados relacional de sua preferência).

É necessário clonar este repositório na sua máquina e alterar o arquivo de configuração de ambiente (.env) e, então, rodar os seguintes comandos no terminal:

1. composer install
2. php bin/doctrine orm:schema-tool:create
3. composer run start

Dessa forma, será possível acessar e utilizar o projeto neste [link](http://localhost:9000).

## Funcionamento

Ao acessar o projeto, você irá ver a tela abaixo:
![plot](https://github.com/nathalia-acordi/backend-test/blob/main/images/tela1.png)
