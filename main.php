<?php
session_start();
if (!isset($_SESSION["username"])){
    header('location:login.php'); 
}?>
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
        <li class="nav-item active">
            <a class="nav-link" href="verCarrito.php">Carrito <span class="sr-only">(current)</span></a>
        </li>
        </ul>
        <span class="navbar-text">
            <a href="logout.php">Cerrar Sesion</a>
        </span>
    </nav>
        </div>
    </div>
    </nav>
    <!-- /menu superior -->
    <!-- contenidor principal -->
    <div class="container">
      <!-- alertas 
        1 login usuario incorrecto
        2 sesion destruida -->
        <?php
          if (isset($_GET['m'])){
              switch($_GET['m']){
                  case 1:?>
                  <div class="alert alert-danger" role="alert">
                      Welcome mr. <?=$_SESSION["username"]?>
                  </div> <?php
                  break;
                  case 2:
                  ?>
                  <div class="alert alert-success" role="success">
                      Ha añadido un producto al carrito
                  </div> 
                  <?php
                  break;
              }
          }?>
        <!--/alertas -->

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Productos</th>
          <th scope="col">Precio</th>
          <th scope="col">Agregar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><img src="img/manzanas.jpg" width="90"  height="90" alt="manzanas"></td>
          <td>10€</td>
          <td><a href="agregar.php?producto=manzanas&precio=10" class="btn btn-primary">Agregar</button></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td><img src="img/platanos.jpg" width="90"  height="90" alt="manzanas"></td>
          <td>20€</td>
          <td><a href="agregar.php?producto=platanos&precio=20" class="btn btn-primary">Agregar</button></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td><img src="img/melones.jpg" width="90"  height="90" alt="manzanas"></td>
          <td>30€</td>
          <td><a href="agregar.php?producto=melones&precio=30" class="btn btn-primary">Agregar</button></td>
        </tr>
      </tbody>
    </table>


    </div>
   <!-- /contenidor principal -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>