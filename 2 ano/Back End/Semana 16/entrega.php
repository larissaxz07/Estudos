<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
define("NOME_EMPRESA", "InfoTech 3º Ano");

    $nomeProduto = "Processador i9" ;
    $quantidadeEstoque = 15 ;
    $precoUnitario = 2750.99 ; 
    $emPromocao = false ;

echo "*** Relatório de Inventário da " . NOME_EMPRESA . " ***<br><br>";

echo "Produto: $nomeProduto<br>";
echo "Quantidade em Estoque: $quantidadeEstoque unidades<br>";
echo "Preço por Unidade: R$ $precoUnitario<br><br>";

echo "--- Status da Promoção ---<br>";

var_dump($emPromocao) ;







?>    

</body>
</html>