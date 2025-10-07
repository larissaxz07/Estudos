<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Orçamento PC-Pronto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>--- Orçamento PC-Pronto ---</h2>

    <!-- Formulário -->
    <form method="POST">
        <label>Preço do produto: </label>
        <input type="number" name="preco" step="0.01" required>

        <label>Quantidade: </label>
        <input type="number" name="quantidade" required>

        <button type="submit">Calcular</button>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $preco = $_POST["preco"];
        $quantidade = $_POST["quantidade"];

       // Subtotal
        $subtotal = $preco * $quantidade;

        // Imposto de 12,5%
        $imposto = $subtotal * 0.125;

        // Total sem frete
        $total = $subtotal + $imposto;

        // Frete aleatório (30 até 150)
        $frete = rand(3000, 15000) / 100;

        // Total com frete
        $totalComFrete = $total + $frete;

        // ---- NOVA PARTE: Cotação do Dólar ----
        $início = date("d-m-Y" , strtotime("-7 days"));
        $fim = date("d-m-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $início.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotaçao = $dados["value"][0]["cotacaoCompra"];


        // Converte para dólares
        $totalDolar = $totalComFrete / $cotacao;

         // Exibe resultados
        echo "<p>Produto: R$ " . number_format($preco, 2, ",", ".") . " ($quantidade)</p>";
        echo "<p>Subtotal: R$ " . number_format($subtotal, 2, ",", ".") . "</p>";
        echo "<p>Imposto (12,5%): R$ " . number_format($imposto, 2, ",", ".") . "</p>";
        echo "<p><strong>Total Final: R$ " . number_format($total, 2, ",", ".") . "</strong></p>";
        echo "<p>Frete: R$ " . number_format($frete, 2, ",", ".") . "</p>";
        echo "<p>Valor Total com Frete: R$ " . number_format($totalComFrete, 2, ",", ".") . "</p>";
         echo "<hr>";
        echo "<p>Cotação do Dólar Hoje: R$ " . number_format($cotacao, 2, ",", ".") . "</p>";
        echo "<p><strong>Total em Dólares: US$ " . number_format($totalDolar, 2, ".", ",") . "</strong></p>";
    }
    ?>  

<!--Cores, eu escolhi essas cores por que são as que eu mais gosto que na paleta de cores, eu escolhi o tipo cores análogicas.-->

<!--Fontes, eu escolhi uma padrao e a outra eu escolhi diferenciada pra destacar.-->