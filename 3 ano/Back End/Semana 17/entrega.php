<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if (isset($_POST["nome_post"])) {
    echo "<h3>Resultado com POST:</h3>";
    echo "Nome: " . htmlspecialchars($_POST["nome_post"]) . "<hr>";
}

if (isset($_GET["nome_get"])) {
    echo "<h3>Resultado com GET:</h3>";
    echo "Nome: " . htmlspecialchars($_GET["nome_get"]) . "<hr>";
}

if (isset($_POST["nome_super"])) {
    echo "<h3>Conteúdo de \$_POST:</h3>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre><hr>";
}

if (isset($_GET["nome_super"])) {
    echo "<h3>Conteúdo de \$_GET:</h3>";
    echo "<pre>";
    print_r($_GET);
    echo "</pre><hr>";
}

$erro = "";
$nome_validado = "";

if (isset($_POST["nome_validacao"])) {
    if (empty($_POST["nome_validacao"])) {
        $erro = "O campo nome é obrigatório!";
    } else {
        $nome_validado = htmlspecialchars($_POST["nome_validacao"]);
    }
}

if ($erro) {
    echo "<p style='color:red;'>$erro</p><hr>";
} elseif ($nome_validado) {
    echo "<p style='color:green;'> Olá, $nome_validado! Dados recebidos com sucesso.</p><hr>";
}

?>

<h2>Ideia 1: GET vs POST</h2>
<form method="get">
    Nome: <input type="text" name="nome_get">
    <button type="submit">Enviar com GET</button>
</form>

<form method="post">
    Nome: <input type="text" name="nome_post">
    <button type="submit">Enviar com POST</button>
</form>

<hr>

<h2>Ideia 2: Superglobais</h2>
<form method="get">
    Nome: <input type="text" name="nome_super">
    Idade: <input type="number" name="idade_super">
    <button type="submit">Enviar com GET</button>
</form>

<form method="post">
    Nome: <input type="text" name="nome_super">
    Idade: <input type="number" name="idade_super">
    <button type="submit">Enviar com POST</button>
</form>

<hr>

<h2>Ideia 3: Validação</h2>
<form method="post">
    Nome: <input type="text" name="nome_validacao">
    <button type="submit">Enviar</button>
</form>
</body>
</html>