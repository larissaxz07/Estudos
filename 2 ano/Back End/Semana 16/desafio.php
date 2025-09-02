<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
define("COTACAO_DOLAR", 5.45);

$dolar1 = 10.00;
$dolar2 = 50.00;
$dolar3 = 100.00; 

$real1 = $dolar1 * COTACAO_DOLAR;
$real2 = $dolar2 * COTACAO_DOLAR;
$real3 = $dolar3 * COTACAO_DOLAR;

echo "+-------------------------------------+\n";
echo "|   TABELA DE CONVERSÃO DE MOEDAS     |\n";
echo "| Cotação do Dólar: R$ " . number_format(COTACAO_DOLAR, 2, ',', '.') . "       |\n";
echo "+-------------------------------------+\n";
echo "| Dólar (US$)   | Real (R$)           |\n";
echo "+---------------+---------------------+\n";
echo "| US$ " . number_format($dolar1, 2, '.', '') . "     | R$ " . number_format($real1, 2, ',', '.') . "          |\n";
echo "| US$ " . number_format($dolar2, 2, '.', '') . "     | R$ " . number_format($real2, 2, ',', '.') . "         |\n";
echo "| US$ " . number_format($dolar3, 2, '.', '') . "    | R$ " . number_format($real3, 2, ',', '.') . "         |\n";
echo "+-------------------------------------+\n";




?>
</body>
</html>