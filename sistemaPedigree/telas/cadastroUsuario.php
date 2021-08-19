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
                <a href="../index.php" class="nav-link text-white" aria-current="page">
                    Tela de Login
                </a>
                </li>
            </ul>
        </div>
        
        <div class="flex-shrink-0 p-3" style="width: 79%; height: 100vh; display: inline-block;">
            
            <form action="../acoes/acaoCadastroUsuario.php" method="post">
                <div style="width: 100%; height: 100%;">
                    <div style="width: 20%; display: inline-block; position: relative; top: -170px;">
                        <h1>Usuario</h1>
                        <label for="nome" class="label" style="display: block; margin-top: 5px;">Informe o nome: </label>
                        <input type="text" name="nome" id="nome" style="display: block;">

                        <label for="username" class="label" style="display: block; margin-top: 5px;">Informe o username: </label>
                        <input type="text" name="username" id="username" style="display: block;">

                        <label for="senha" class="label" style="display: block; margin-top: 5px;">Informe a senha: </label>
                        <input type="text" name="senha" id="senha" style="display: block;">
                    </div>
                    <div style="width: 10%; display: inline-block;"></div>
                    <div style="width: 20%; display: inline-block;">
                        <h1>Endereço</h1>
                        <label for="rua" class="label" style="display: block; margin-top: 15px;">Informe a rua: </label>
                        <input type="text" name="rua" id="rua" style="display: block;">

                        <label for="numero" class="label" style="display: block; margin-top: 5px;">Informe o numero: </label>
                        <input type="text" name="numero" id="numero" style="display: block;">

                        <label for="bairro" class="label" style="display: block; margin-top: 15px;">Informe o bairro: </label>
                        <input type="text" name="bairro" id="bairro" style="display: block;">

                        <label for="cidade" class="label" style="display: block; margin-top: 15px;">Informe a cidade: </label>
                        <input type="text" name="cidade" id="cidade" style="display: block;">

                        <label for="estado" class="label" style="display: block; margin-top: 15px;">Informe o estado: </label>
                        <input type="text" name="estado" id="estado" style="display: block;">
                    </div>
                </div>
                <input type="submit" class="label" name="submit" id="submit" style="display: block; margin-top: 15px;" value="Cadastrar">

            </form>
        </div>
    </div>

    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/sidebars.js"></script>
</body>
</html>