<?php
session_start();

if (isset($_GET['email']) and isset($_GET['password'])){
    $email=$_GET['email'];
    $password=$_GET['password'];

    $conector=new mysqli ('localhost', 'pruebas', 'pruebas', 'pruebas');
    if ($conector->connect_error){
    echo "error al conectar a la base de dades: ".$conector->connect_error;
    } else {
    echo "s'ha conectat a la base de dades correctament<br>";
    }

    $sql="SELECT * FROM `usuaris` WHERE `email` = '$email' AND `password` = '$password'";
    $resultats=$conector->query($sql);
    if ($resultats->num_rows==1){
        $registre=$resultats->fetch_assoc();
            $_SESSION["username"]=$registre["username"];
            //echo $registre["username"]." ".$registre["ciutat"]."<br>";
            header('location:main.php');
        }   else {
            echo "no hay registros para mostrar";
            header('location:index.php?m=1');
        }
}else{
    header('location:index.php?m=1');
}
?>