<!DOCTYPE html>
<?php 
  session_start();
  if (isset($_SESSION['usuario']))
  	header("location:index.php");
 ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Login</title>
    <link rel=”stylesheet” href=”bootstrap-5.0.2-dist/css/bootstrap.css”>

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
  <link href="bootstrap-5.0.2-dist/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">
 <main class="form-signin">
  <form action="acoesLogin.php" id="form" method="post">
    <fieldset>
      <h1 class="h3 mb-3 fw-normal">Sistema de Pedigree</h1>
      <div class="form-floating">
        <label for="user">Usuário</label>
        <input type="text" class="form-control" name="user" id="user" value=""><br/><br/>
      </div>

      <div class="form-floating">
        <label for="user">Senha</label>
        <input type="password" class="form-control" name="pass" id="pass" value=""><br/><br/>
      </div>
    
      <button class="w-100 btn btn-lg btn-primary" name="acao" value="login" id="login" type="submit">
        Entrar
      </button>
      <button class="w-100 btn btn-lg btn-primary" name="acao" value="cadastrarUsuario" id="cadastrarUsuario" type="submit">
        Cadastrar
      </button>
    </fieldset>
  </form>
 </main>

</body>
</html>
