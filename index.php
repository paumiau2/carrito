<?php
session_start();
if (isset($_SESSION["username"])){
    header('location:main.php');
}
$conector=new mysqli ('localhost', 'pruebas', 'pruebas', 'pruebas');
if ($conector->connect_error){
echo "error al conectar a la base de dades: ".$conector->connect_error;
} else {
echo "s'ha conectat a la base de dades correctament<br>";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Tenda del Paumiau</title>
  </head>
  <body>
    <!-- menu superior -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        </ul>
    <!-- formulario login -->
    <form class="form-inline" action="validarLogin.php">
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
        <input type="password" class="form-control" name="password" id="password">  
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
        <a href="singin.php" class="btn btn-primary">Sign In</a>
    </form>
    <!-- /formulario login -->
    </nav>
        </div>
    </div>
    </nav>
    <!-- /menu superior -->

    <div class="container">
        <!-- alertas 
        1 login usuario incorrecto
        2 sesion destruida -->
        <?php
    if (isset($_GET['m'])){
        switch($_GET['m']){
            case 1:?>
            <div class="alert alert-danger" role="alert">
                Nombre de usuario o contraseña incorrecta
            </div> <?php
            break;
            case 2:
            ?>
            <div class="alert alert-success" role="alert">
                La sesion ha sido destruiiiida
            </div> 
            <?php
            break;
        }
    }?>
    <!--/alertas -->
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Fluid jumbotron</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
    </div>
    <!-- /jumbotron --> 

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>