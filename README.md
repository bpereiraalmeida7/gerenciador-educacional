# gerenciador-educacional

Aplicação educacional, para gerenciamento de alunos e importação de cursos em XML. Utilizando Laravel, Ajax, MySql, e InfyOm (Laravel Generator Admin).

### :zap: Para executar:

* Clone o repositório.  

* Crie o arquivo .env a partir do exemplo de estrtura do arquivo .env.example adicionando as credênciais do Database: host, username, password e o nome do seu database (crie esse database).

* Instale as dependências do projeto:

> composer install

* Gere uma chave para sua aplicação:

> php artisan key:generate

* Execute o comando pra criar as tabelas necessárias na database criada:

> php artisan migrate

* Execute o comando pra inicializar o servidor:

> php artisan serve

* Abra sua aplicação no navegador com o endereço:

> http://127.0.0.1:8000

