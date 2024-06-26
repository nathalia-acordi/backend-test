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

Ela representa uma tela de consulta de pessoas. Nela, é possível:

1. Buscar pessoa pelo nome
2. Adicionar pessoa
3. Editar pessoa
4. Excluir pessoa
5. Adicionar contato
6. Listar contatos

Ao clicar em "Adicionar pessoa", você será redirecionado para a página abaixo:

![plot](https://github.com/nathalia-acordi/backend-test/blob/main/images/tela3.png)

Nela, será necessário informar o nome e o CPF da pessoa a ser cadastrada e, então, salvar.

Ao clicar em "Editar", você será redirecionado para a página abaixo:

![plot](https://github.com/nathalia-acordi/backend-test/blob/main/images/tela2.png)

Nela, você poderá alterar os dados que deseja e, então, salvar.

Ao clicar em "Excluir", a pessoa será apagada do banco de dados.

Ao clicar em "Adicionar contato", você será redirecionado para a página abaixo:

![plot](https://github.com/nathalia-acordi/backend-test/blob/main/images/tela4.png)

Nela, será necessário informar o tipo de contato (e-mail ou telefone) e a descrição dele e, então, salvar.

Ao clicar em "Listar contatos", você será redirecionado para a página abaixo:

![plot](https://github.com/nathalia-acordi/backend-test/blob/main/images/tela5.png)

Ela representa uma tela de consulta de contatos. Nela, é possível:

1. Listar pessoas
2. Editar contato
3. Excluir contato

Ao clicar em "Editar contato", você será redirecionado para a página abaixo:

![plot](https://github.com/nathalia-acordi/backend-test/blob/main/images/tela6.png)

Nela, você poderá alterar os dados que deseja e, então, salvar.

Ao clicar em "Excluir", o contato será apagado do banco de dados.

E, ao clicar em "Listar pessoas", você será redirecionado para a página inicial.
