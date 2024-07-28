<h1 align="center">Plugin Não-Oficial Efí Bank (Gerencianet) para Wordpress/Woocommerce</h1>

forked from [efipay/Plugin-Wordpress-Efi](https://github.com/efipay/Plugin-Wordpress-Efi)

Receba pagamentos por Boleto bancário, Pix e cartão de crédito em sua loja WooCommerce com a efí/Gerencianet!

## Suporte Técnico
### Atenção: 
* Para resolução de problemas abra uma issue no nosso [Github](https://github.com/aireset/efi-gerencianet-woocommerce), envie print, informações de uso para podermos auxiliar na melhor forma, caso precise suporte direto da Efí, use o plugin oficial.


## Descrição 

Este PLugin é um Fork do Módulo Oficial de integração fornecido pela [Efí](https://gerencianet.com.br/) para WooCommerce. Com ele, o proprietário da loja pode optar por receber pagamentos por Boleto Bancário, Cartão de Crédito, Pix ou Open Finance. Todo processo é realizado por meio do checkout transparente. Com isso, o comprador não precisa sair do site da loja para efetuar o pagamento.

## Requisitos
* Versão do PHP: 7.x ou superior
* Versão do WooCommerce: 5.x ou superior
* Versão do WordPress: 6.x ou superior

## Instalação automática 

1. Acesse o link em sua loja "Plugins" -> "Adicionar novo" -> No campo de busca, pesquise por "Efí/Gerencianet por Aireset".
2. Clique em "Instalar agora".
4. Após a instalação, clique em "Ativar o Plugin".
5. Configure o plugin em "WooCommerce" > "Configurações" > "Pagamentos"  e comece a receber pagamentos!


## Configuração 

1. Ative o plugin.

2. Configure as credenciais de sua Aplicação. Para criar uma nova Aplicação, entre em sua conta Efí Bank, acesse o menu "API" e clique em "Aplicações" -> "Nova aplicação". Libere os escopos desejados e então insira as credenciais Client ID e Client Secret de produção e homologação nos respectivos campos de configuração do plugin.

3. Configure as opções de pagamento que deseja receber: Boleto, Cartão de Crédito, Open Finance e/ou Pix.

4. Caso utilize a opção de Cartão de Crédito:
   * Insira o Identificador de Conta de sua conta Efí Bank. 
   `Para encontrar o Identificador, entre em sua conta, acesse o menu "API" e clique em "Introdução". Na lateral direita haverá um botão chamado "Identificador de conta" basta clicar e o código identificador será exibido`

5. Caso utilize a opção de Pix:
   * Insira sua Chave Pix cadastrada em sua conta Efí.
   * Insira o seu certificado (arquivo .p12).
   * Marque o campo "Validar mTLS" caso deseje utilizar a validação mTLS em seu servidor.

6. Caso utilize a opção de Open Finance:
   * Insira seu CPF/CNPJ (APENAS NÚMEROS)
   * Nome completo
   * Número da conta Efí (Com dígito e SEM TRAÇO)

7. Recomendamos que antes de disponibilizar os pagamentos, o lojista realize testes de cobrança com o sandbox(ambiente de testes) ativado para verificar se o procedimento de pagamento está acontecendo conforme esperado.

## **Documentação Adicional**

A documentação completa com todos os endpoints e detalhes das APIs está disponível em https://dev.efipay.com.br/docs/modulos/WordPress.

Se você ainda não tem uma conta digital Efí Bank, [abra a sua agora](https://sejaefi.com.br)!

## **Comunidade no Discord**

Participe da comunidade do [Discord](https://comunidade.sejaefi.com.br) da Efí.