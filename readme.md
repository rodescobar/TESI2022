# Disciplina Tópicos Especiais em SI

## Prof. Rodrigo Escobar

### Aula 01 - 16/02/2022
- Apresentação do conteúdo
- Frameworks
- PHP e Framworks
- Download do CodeIgniter 3
\
[https://codeigniter.com/download]
- Alteração no Apache para trabalhar com Hosts Virtuais
```
Listen 8080

SeverListen 8080

<VirtualHost *:8080>
    DocumentRoot c:/wamp/www/codeigniter
</VirtualHost>
```

### Aula 02 - 23/02/2022
- Criação de tabelas - MySQL
- Consultas - MySQL
- Populando tabela
- Erros de desenvolvimento e vulnerabilidades no código
- Conexão do CI3 com banco de dados MySQL
- Teste de invasão por erro


### Aula 03 - 09/03/2022
- Início da criação de CRUD (Marquinhos Veículos)
- Criação de banco e tabela veículos
- Criação de Controller Veículo
- Criação de Model Veículo
- Criação de formulário simples


### Aula 04 - 17/03/2022
- Rollback
- Apache / Mysql / PHP
- Portas Windows
- Framework CodeIgniter
- Autload e Database (codeigniter/application/config) 
- Controller
- Model
- View

## Aula 05 - 23/03/2022
- View recebendo lista de veiculos
- Selecionando veículo 
- Model (seleção de veículo por nome, modelo, id)
- Criação de veículo com form_validadtion

## Aula 05.1 - 30/03/2022
- Término de CRUD

## Aula 06 - 06/04/2022
- Login
- Session
- Alteração no CRUD para somente usuários logados
- Se der, template

## Aula 07 - 13/04/2022
- Template

## Aula 08 - 20/04/2022
- JOIN de tabelas
- Adição de SELECT itens nos formularios de Novo/Alteração
- Exercício
 - Criar o CRUD para a tabela CORES.

## Aula 09 / 10 - 27/04/2022 e 04/05/2022
- Trabalho a padaria do Barba
- Tabelas com relacionamento
- Templates
- Login
- Sessão
- Adicional: Template para a página inicial.

## Aula 11 - 11/05/2022
- Criando VPS (google console)
- Criando servidor Web com apache
- Criando servidor MySQL e liberando acesso externo
- PDF com conteúdo

## Aula 12 - 18/05/2022
- Instalando PHP na VPS
- WinSCP
- Copiando arquivos pelo WinSCP
- Configurações na aplicação para execuçãona VPS
- NoIP
- Configurando NoIP

## Aula 13 - 25/05/2022
- [Heroku](heroku.com)
- Criando aplicação de teste PHP para banco remoto
- Enviando aplicação ao Heroku
- Criando um servidor MySQL no site [remotemysql.com](remotemysql.com)

**Primeiro envio ao Heroku**
```
git init
heroku login
git heroku:remote -a projeto
git add .
git commit -m "Mensagem"
git push heroku master
```

**Enviando alterações**
```
git add .
git commit -m "Mensagem"
git push heroku master
```

**Logs no heroku**
```
heroku logs --tail
```

## Aula 13 - 25/05/2022 - Exercício
- Exercício


## Templates
```
https://jeromejaglale.com/doc/php/codeigniter_template

https://bootstrapmade.com/demo/NiceAdmin/

```

## CRUD
```
C -> create
R -> read
U -> update
D -> delete
```