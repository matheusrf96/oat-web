<?php

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
    <link rel="icon" href="bootstrap-4.1.0/favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pg=formulario">Contato</a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Meu site!</h1>
          <p>Este é um site de exemplo.</p>
        </div>
      </div>

      <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
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
