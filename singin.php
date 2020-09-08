<?php
session_start();
if (isset($_SESSION["username"])){
    header('location:main.php'); 
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
       
       <!-- formulari alta -->
       <form action="validarSignin.php">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">username</label>
            <input type="text" name="username" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">email</label>
            <input type="email" required name="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">direccio</label>
          <input type="text" name="direccio" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress2">provincia </label>
          <input type="text" name="provincia" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">ciutat</label>
            <input type="text" name="ciutat" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">pais</label>
            <select id="inputState" name="pais" class="form-control">
              <option selected>Spain</option>
              <option>france</option>
              <option>italy</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">cp</label>
            <input type="text" name="cp" class="form-control" id="inputZip">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              He leido todo el rollo
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
    <!-- /  formulari alta -->

    </div>
   <!-- /contenidor principal -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>