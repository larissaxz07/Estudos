<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distância Entre Pontos</title>
</head>
<body>
   <?php

$pontoA = -8;
$pontoB = 12;

$distancia = abs($pontoA - $pontoB);
 
echo "<h1>Distância Absoluta Entre Dois Pontos</h1>";

echo "<p>Ponto A: " . $pontoA . 
"Ponto B: " . $pontoB . "</p>";
echo "<p><b>A distância absoluta entre os pontos é:" . $distancia . "</b></p>";
?>
</body>
</html>