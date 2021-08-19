<?php 
    include '../conf/conf.inc.php';
    include '../valida.php';
    include '../connect/Conexao.php';

    $pdo = Conexao::getInstance();

    $stmt = $pdo->prepare('INSERT INTO usuario(nome, username, senha) VALUES (:nome, :username, :senha)');
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);

    $nome = isset($_POST['nome']) ? $_POST['nome'] : 0;
    $username = isset($_POST['username']) ? $_POST['username'] : 0;
    $senha = isset($_POST['senha']) ? $_POST['senha'] : 0;

    $stmt->execute();
    header("location: ../telas/cadastroUsuario.php");
?>