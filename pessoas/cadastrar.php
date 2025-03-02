<?php
    include '../recursos/conexao.php';

    /*
    //Teste para verificar se o formulário foi enviado
    if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
        echo $_POST['nome'] . '<br>';
        echo $_POST['email'] . '<br>';
        echo $_POST['senha'] . '<br>';
    } else {
        echo 'Não o formulário';
    }
    */

    if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
        $conexao -> query("INSERT INTO pessoa (nome, email, senha) VALUES('$_POST[nome]', '$_POST[email]', '$_POST[senha]')");
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pensamentos</title>
    <link rel="shortcut icon" href="../recursos/imagens/brain.png" type="image/x-icon">
    <link rel="stylesheet" href="../recursos/estilos/geral.css">
    <link rel="stylesheet" href="../recursos//estilos/pessoas.css">
</head>
<body>

<img src="../recursos/imagens/brain.png" alt="Logo de rede de pensamentos">

<h2>#pensamentos</h2>

<h4>Cadastre sua conta</h4>
<form action="cadastrar.php" method="POST">
    <input type="text" name="nome" placeholder="Nome" required>
    <br>
    <input type="email" name="email" placeholder="E-mail" required>
    <br>
    <input type="password" name="senha" placeholder="Senha" required>
    <br>

    <input class="submits" id="submit-cadastrar" type="submit" value="Cadastrar conta">
</form>

<a href="..">Voltar para o início</a>

<?php
//Se voltar da forma abaixo vai exibir nome da página com php na URL
//<a href="../index.php">Voltar para o início</a>
?>
    
</body>
</html>