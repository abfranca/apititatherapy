## Especificações

O objetivo é entregar os dados necessários para se criar um gŕafico de Pizza.
Deve-se criar uma rota usando o método POST entregando os parâmetros como
JSON e deve-se retornar também um JSON onde cada chave esteja relacionada ao
ângulo de um círculo referente ao valor passado.
**Se necessário os ângulos retornados devem ter até 2 casas decimais.

## Exemplos

1. Parâmetro
- {"Hausa": 4, "Yoruba" : 5, "Igbo" : 6, "Efik" : 1, "Edo" : 4} deve retornar:
- {"Hausa":72,"Yoruba":90,"Igbo":108,"Efik":18,"Edo":72}

2. Parâmetro
- {"Android": 500, "iOS" : 270, "Microsoft" : 230} deve retornar:
- {"Android":180,"iOS":97.2,"Microsoft":82.8}

3. Parâmetro
- {"English": 4, "Polish" : 12, "Russian" : 10, "Spanish" : 2} deve retornar:
- {"English":51.43,"Polish":154.29,"Russian":128.57,"Spanish":25.71}

## Teste

- Certifique-se que tem [PHP](https://www.php.net/downloads.php) e [Composer](https://getcomposer.org/download/) instalados no ambiente de execução
- Faça um clone do repositório
- Abra o terminal na raíz do repositório
- Execute o comando: composer install
- Execute o comando: php artisan serve
- Envie uma requisição HTTP do tipo POST para a URI http://localhost:8000/api/pizza-maker passando um JSON no body da requisição conforme os exemplos acima (recomendável utilizar o [Postman](https://www.postman.com/downloads/))

## Adicionais

O código contendo a lógica de tratamento da requisição está no arquivo [./routes/api.php](https://github.com/abfranca/apititatherapy/blob/main/routes/api.php).