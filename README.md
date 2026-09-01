# Lista de Tarefas - PHP OOP + PDO

CRUD completo de lista de tarefas desenvolvido em PHP orientado a objetos, utilizando o padrão Model/Service/Controller, PDO com prepared statements e métodos mágicos (`__get`/`__set`).

## Funcionalidades

- Inserir nova tarefa
- Listar todas as tarefas
- Listar apenas tarefas pendentes
- Atualizar tarefa
- Remover tarefa
- Marcar tarefa como realizada

## Tecnologias utilizadas

- PHP (OOP, PDO, prepared statements)
- MySQL
- Bootstrap 4
- Font Awesome
- JavaScript (pequena manipulação de DOM para edição inline)

## Estrutura do projeto

    Projeto-Lista-de-Tarefas-PHP/
├── app_lista_tarefas/ # Lógica interna (Model, Service, Controller, Conexão)
├── app_lista_tarefas_public/ # Arquivos públicos (acessados via navegador)
└── database.sql # Script de criação do banco de dados


## Como rodar o projeto

1. Clone este repositório
2. Copie a pasta `app_lista_tarefas_public` para dentro da pasta `htdocs` do seu XAMPP
3. Copie a pasta `app_lista_tarefas` para dentro da pasta raiz do XAMPP (ex: `C:\xampp\`)
4. Importe o arquivo `database.sql` no seu phpMyAdmin (isso vai criar o banco `lista_tarefas` com as tabelas e dados de exemplo)
5. Edite o arquivo `conexao.php` (dentro de `app_lista_tarefas`) com os dados de acesso do seu banco de dados local:

```php
private $host = 'localhost';
private $dbname = 'lista_tarefas';
private $user = 'seu_usuario';
private $pass = 'sua_senha';
```

6. Acesse `http://localhost/app_lista_tarefas_public/` no navegador

## Créditos

Projeto desenvolvido como parte do curso de PHP do professor **Jorge Sant'Ana**, com foco em orientação a objetos, PDO e boas práticas de CRUD.