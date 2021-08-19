<!DOCTYPE html>
<?php 
	include '../conf/conf.inc.php';
	include '../valida.php';
  include '../connect/Conexao.php';

?> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Cachorros</title>

    <link href="../bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="../bootstrap-5.0.2-dist/css/sidebars.css" rel="stylesheet">
</head>
<body>
    <div style="width: 100%; height: 100%; display: flex;">
      <div class="flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 21%; height: 100vh; display: inline-block;">
          <span class="fs-4">
          <?php 
            echo "Listagem Cachorros";
          ?>
        </span>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="cadastroCachorro.php" class="nav-link text-white" aria-current="page">
              Cadastro Cachorro
            </a>
          </li>
          <li class="nav-item">
            <a href="../index.php" class="nav-link text-white" aria-current="page">
              Tela inicial
            </a>
          </li>
        </ul>
      </div>

      <div class="flex-column flex-shrink-0 p-3" style="width: 79%; height: 100vh; display: inline-block;">
          <?php 
            $pdo = Conexao::getInstance();
            $idBusca = 1;

            $consultaCachorros = $pdo->query("SELECT * FROM cachorro WHERE id_usuario = $idBusca ORDER BY nome");
            while ($linha = $consultaCachorros->fetch(PDO::FETCH_ASSOC)) {
              echo "<div style=\"width: 40%; height: 20%; border: 2px solid gray; margin: 10px; padding: 3px;\">";
              echo "<a style=\"width: 50px; float: right; margin-right: 10px;\" href=\"../acoes/certificadoWord.php?nome={$linha['nome']}&raca={$linha['raca']}&cor={$linha['cor']}&sexo={$linha['sexo']}&pais={$linha['pais_origem']}&dataNascimento={$linha['data_nascimento']}&tipo=word\" class=\"nav-link\" aria-current=\"page\">Word</a>";
              echo "<p>Nome: {$linha['nome']} - Raça: {$linha['raca']}</p>";
              echo "<a style=\"width: 50px; float: right; margin-right: 10px;\" href=\"../acoes/certificadoWord.php?nome={$linha['nome']}&raca={$linha['raca']}&cor={$linha['cor']}&sexo={$linha['sexo']}&pais={$linha['pais_origem']}&dataNascimento={$linha['data_nascimento']}&tipo=xls\" class=\"nav-link\" aria-current=\"page\">XLS</a>";
              echo "<p>Cor: {$linha['cor']} - Sexo: {$linha['sexo']}</p>";
              echo "<p>País: {$linha['pais_origem']} - Data Nascimento: {$linha['data_nascimento']}</p>";
              echo "</div>";
            }
          ?>
      </div>

    </div>  
    
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/sidebars.js"></script>
</body>
</html>