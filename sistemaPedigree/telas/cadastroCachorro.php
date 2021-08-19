<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cachorro</title>

    <link href="../bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      input {
        margin-top: 10px;
        text-align: center;
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
        <div class="p-3 text-white bg-dark" style="width: 21%; height: 100vh; display: inline-block;">
                <span class="fs-4">
                <?php 
                echo "Cadastro";
                ?>
            </span>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                <a href="listagemCachorros.php" class="nav-link text-white" aria-current="page">
                    Listagem de cachorros
                </a>
                </li>
                <li class="nav-item">
                <a href="../index.php" class="nav-link text-white" aria-current="page">
                    Tela inicial
                </a>
                </li>
            </ul>
        </div>
        
        <div class="flex-shrink-0 p-3" style="width: 79%; height: 100vh; display: inline-block;">
            <h1>Cadastre o seu cachorro</h1>
            <form action="../acoes/acaoCadastroCachorro.php" method="post">
                <label for="nome" class="label" style="display: block; margin-top: 5px;">Informe o nome: </label>
                <input type="text" name="nome" id="nome" style="display: block;">

                <label for="raca" class="label" style="display: block; margin-top: 5px;">Informe a raça: </label>
                <input type="text" name="raca" id="raca" style="display: block;">

                <label for="cor" class="label" style="display: block; margin-top: 5px;">Informe a cor: </label>
                <input type="text" name="cor" id="cor" style="display: block;">

                <label for="sexo" class="label" style="display: block; margin-top: 5px;">Informe o sexo: </label>
                <input type="radio" name="sexo" id="sexo" value="Masculino">Masculino
                <input type="radio" name="sexo" id="sexo" value="Feminino">Feminino

                <label for="paisOrigem" class="label" style="display: block; margin-top: 15px;">Informe o país de origem: </label>
                <input type="text" name="paisOrigem" id="paisOrigem" style="display: block;">

                <label for="dataNascimento" class="label" style="display: block; margin-top: 5px;">Informe a data de nascimento: </label>
                <input type="date" name="dataNascimento" id="dataNascimento" style="display: block;">

                <input type="submit" class="label" name="submit" id="submit" style="display: block; margin-top: 15px;" value="Cadastrar">

            </form>
        </div>
    </div>

    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/sidebars.js"></script>
</body>
</html>