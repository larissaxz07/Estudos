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

         // Exibe resultados
        echo "<p>Produto: R$ " . number_format($preco, 2, ",", ".") . " ($quantidade)</p>";
        echo "<p>Subtotal: R$ " . number_format($subtotal, 2, ",", ".") . "</p>";
        echo "<p>Imposto (12,5%): R$ " . number_format($imposto, 2, ",", ".") . "</p>";
        echo "<p><strong>Total Final: R$ " . number_format($total, 2, ",", ".") . "</strong></p>";
        echo "<p>Frete: R$ " . number_format($frete, 2, ",", ".") . "</p>";
        echo "<p>Valor Total com Frete: R$ " . number_format($totalComFrete, 2, ",", ".") . "</p>";
    }
    ?>  

<!--Cores, eu escolhi essas cores por que são as que eu mais gosto que na paleta de cores, eu escolhi o tipo cores análogicas.-->

<!--Fontes, eu escolhi uma padrao e a outra eu escolhi diferenciada pra destacar.-->