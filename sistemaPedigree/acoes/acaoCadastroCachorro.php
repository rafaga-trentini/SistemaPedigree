<?php 
    include '../conf/conf.inc.php';
    include '../valida.php';
    include '../connect/Conexao.php';

    $pdo = Conexao::getInstance();

    $stmt = $pdo->prepare('INSERT INTO cachorro(nome, raca, cor, sexo, pais_origem, data_nascimento, id_usuario) VALUES (:nome, :raca, :cor, :sexo, :paisOrigem, :dataNascimento, :idUsuario)');
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':raca', $raca, PDO::PARAM_STR);
    $stmt->bindParam(':cor', $cor, PDO::PARAM_STR);
    $stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);
    $stmt->bindParam(':paisOrigem', $paisOrigem, PDO::PARAM_STR);
    $stmt->bindParam(':dataNascimento', $dataNascimento, PDO::PARAM_STR);
    $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);

    $nome = isset($_POST['nome']) ? $_POST['nome'] : 0;
    $raca = isset($_POST['raca']) ? $_POST['raca'] : 0;
    $cor = isset($_POST['cor']) ? $_POST['cor'] : 0;
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : 0;
    $paisOrigem = isset($_POST['paisOrigem']) ? $_POST['paisOrigem'] : 0;
    $dataNascimento = isset($_POST['dataNascimento']) ? $_POST['dataNascimento'] : 0;
    $idUsuario = $_SESSION['idUsuario'];

    $stmt->execute();
    header("location: ../telas/cadastroCachorro.php");
?>