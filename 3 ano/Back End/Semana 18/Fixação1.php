<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Desconto</title>
</head>
<body>
    <?php

$precoProduto = 150.00;
$percentualDesconto = 10;

$valorDesconto = ($precoProduto * $percentualDesconto) / 100;

$precoFinal = $precoProduto - $valorDesconto;

echo "<h1>Detalhes do Produto</h1>";

echo "Preço Original: R$ " . number_format($precoProduto, 2, ',', '.') . "<br>";
echo "Desconto de $percentualDesconto%: R$ " . number_format($valorDesconto, 2, ',', '.') . "<br>";
echo "Preço Final: R$ " . number_format($precoFinal, 2, ',', '.') . "<br>";
    ?>
</body>
</html>