<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_GET["pg"])){
  $pg = $_GET["pg"];
}
else{
  $pg = "inicio";
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Site de exemplo</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto menu-principal">
          <li class="nav-item <?= ($pg == 'inicio')?'active':'' ?>">
            <a class="nav-link" href="./">Home</a>
          </li>
          <li class="nav-item 
          <?php 

            if($pg == 'listagem'){
              echo 'active';
            }

          ?>
          ">
            <a class="nav-link" href="?pg=listagem">Listagem de Itens</a>
          </li>
          <li class="nav-item 
          <?php 
          
            if($pg == 'sobre'){
              echo 'active';
            }
          
          ?>
          ">
            <a class="nav-link" href="?pg=sobre">Sobre</a>
          </li>
          <li class="nav-item 
          <?php 

            if($pg == 'formulario'){
              echo 'active';
            }

          ?>
          ">
            <a class="nav-link" href="?pg=formulario">Login</a>
          </li>
          <li class="nav-item 
          <?php 

            if($pg == 'area-restrita'){
              echo 'active';
            }

          ?>
          ">
            <a class="nav-link" href="?pg=formulario">Área Restrita</a>
          </li>
        </ul>
        <div class="text-right bem-vindo">
          <?php
            if(isset($_SESSION['usuario'])){
              echo "<p>Olá, ".$_SESSION['usuario']['nome']."! <a href='?pg=logout'>Sair</a></p>";
            }
          ?>
        </div>
      </div>
    </nav>

    <main role="main">
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Meu site!</h1>
          <p>Este é um site de exemplo.</p>
          <!-- <?php
            if(isset($_SESSION['usuario'])){
              echo "<p>Olá, ".$_SESSION['usuario']['nome']."</p>";
              echo "<a href='?pg=logout'>Sair</a>";
            }
          ?> -->
        </div>
      </div>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <?php
            if($pg=='formulario'){
              echo '<li class="breadcrumb-item"><a href="#">Login</a></li>';
            }
            else if($pg == 'sobre'){
              echo '<li class="breadcrumb-item"><a href="#">Sobre</a></li>';
            }
            else if($pg == 'listagem'){
              echo '<li class="breadcrumb-item"><a href="#">Listagem de Itens</a></li>';
            }
            else if($pg == 'area-restrita'){
              echo '<li class="breadcrumb-item"><a href="#">Área Restrita</a></li>';
            }
          ?>
        </ol>
      </nav>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col">
            <?php include("paginas/".$pg.".php"); ?>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; Meu projeto 2018</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="bootstrap-4.1.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap-4.1.0/assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap-4.1.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
