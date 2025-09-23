<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>
<body>
    <?php
if (isset($_POST["ano"])) {
    $anoNascimento = (int) $_POST["ano"];
    $anoAtual = date("Y");
    $idade = $anoAtual - $anoNascimento;

    echo "<p>Quem nasceu em <strong>$anoNascimento</strong> tem/terá aproximadamente <strong>$idade</strong> anos.</p>";
} else {
    ?>
    <form method="post" action="">
        <label for="ano">Qual seu ano de nascimento?</label>
        <input type="number" name="ano" id="ano" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
}
?>
</body>
</html>