<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Desafio PHP</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<main>	
		<h1>Conversor de Moedas</h1>
		<?php
			// Cotação copiada do Google
			$cotação = 5.19;
			
			// Quanto $$ você tem?
			$real = $_REQUEST["din"] ?? 0;
			
			// Equivalência em dólar
			$dólar = $real / $cotação;
			
			// Mostrar o resultado
			// echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalente a US\$" . number_format($dólar, 2, ",", ".");
			
			// Formatação de moedas com internacionalização!
			// Biblioteca intl (Internal lization PHP)
			
			$padrão = numfmt_create("pt-br", NumberFormatter::CURRENCY);
			
			echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalente a <strong>" . numfmt_format_currency($padrão, $dólar, "USD") . "</strong></p>";

		?>
		<button onclick="javascript:history.go(-1)">Voltar</button>
	</main>

</body>
</html>