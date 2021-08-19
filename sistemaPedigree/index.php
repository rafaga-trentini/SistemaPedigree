<!DOCTYPE html >
<?php 
	include 'conf/conf.inc.php';
	include 'valida.php';
  include 'ConexaoIndex.php';
  
?> 
<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Sistema Pedigree</title>

	<link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">

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

    <link href="bootstrap-5.0.2-dist/css/sidebars.css" rel="stylesheet">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      
      function drawChart() {
        
        var data = google.visualization.arrayToDataTable([
          <?php 
            $pdo = Conexao::getInstance();
            $idBusca = 1;

            $consultaCachorros = $pdo->query("SELECT raca FROM cachorro WHERE id_usuario = $idBusca");
            while ($linha = $consultaCachorros->fetch(PDO::FETCH_ASSOC)) {
              $raca = $linha['raca'];
              $contRaca = $pdo->query("SELECT COUNT(raca) FROM cachorro WHERE raca = '$raca%'")->fetchColumn();;
              echo "[$raca, $contRaca,";
            }
            echo "['Raças', 'Quantidade']";
          ?>
        ]);

        var options = {
          title: 'Quantidade de raças cadastradas'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <main>
  <h1 class="visually-hidden">Bem vindo</h1>

  <div style="width: 100%; height: 100%; display: flex;">
    <div class="flex-shrink-0 p-3 text-white bg-dark" style="width: 21%; height: 100vh; display: inline-block;">
      <span class="fs-4">
      <?php 
        echo "Bem-vindo, ".$_SESSION['nome'];
      ?>
    </span>
    <a href="acoesLogin.php?acao=logoff">sair</a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="telas/listagemCachorros.php" class="nav-link text-white" aria-current="page">
            Cachorros
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            Configurações
          </a>
        </li>
      </ul>
    </div>

    <div class="flex-column flex-shrink-0 p-3" style="width: 79%; height: 100vh; display: inline-block;">
      <div id="piechart" style="width: 900px; height: 500px;"></div>
    </div>

  </div>
  
<script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap-5.0.2-dist/js/sidebars.js"></script>
</body>
</html>

