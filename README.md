## Integração com webservice Caixa | PHP

Requisitos:
- PHP 5.6
- cURL

Esse projeto tem como objetivo disponibilizar de forma fácil 
e simplificada, a integração de sistemas PHP com o webservice da Caixa
(Caixa Econômica Federal) para cobrança registrada.

Para realizar testes com essa integração basta clonar o repositório e alterar
os dados que serão enviados, os mesmos estão disponíveis em `src\Dados.php`.

Caso tenha problemas com o hash, no arquivo `lib\Caixa.php:173` no método que
que faz a criptografia, há um exemplo enviado pela caixa para validação.
