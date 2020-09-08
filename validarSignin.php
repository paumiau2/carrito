<?php
session_start();
$error=0;

if (!isset($_GET['username'])){
    $error="nombre de usuario";
}else{
    $username=$_GET['username'];
}

if (!isset($_GET['email'])){
    $error="email";
}else{
    $email=$_GET['email'];
}

if (!isset($_GET['password'])){
    $error="password";
}else{
    $password=$_GET['password'];
}

if (!isset($_GET['direccio'])){
    $error="direccio";
}else{
    $direccio=$_GET['direccio'];
}

if (!isset($_GET['provincia'])){
    $error="provincia";
}else{
    $provincia=$_GET['provincia'];
}

if (!isset($_GET['ciutat'])){
    $error="ciutat";
}else{
    $ciutat=$_GET['ciutat'];
}

if (!isset($_GET['pais'])){
    $error="pais";
}else{
    $pais=$_GET['pais'];
}

if (!isset($_GET['cp'])){
    $error="cp";
}else{
    $cp=$_GET['cp'];
}

if ($error!=0){
    header("location:signin.php?m=1&error=$error");
}else{

    $conector=new mysqli ('localhost', 'pruebas', 'pruebas', 'pruebas');
    if ($conector->connect_error){
    echo "error al conectar a la base de dades: ".$conector->connect_error;
    } else {
    echo "s'ha conectat a la base de dades correctament<br>";
    }

    $sql="INSERT INTO usuaris (`id`, `username`, `email`, `password`, `direccio`, provincia, ciutat, pais, cp ) VALUES (id, '$username', '$email', '$password', '$direccio', '$provincia', '$ciutat', '$pais', '$cp');";
    $resultats=$conector->query($sql);
    if ($resultats){
        echo "se ha ejeutado la orden";
        //header('location:login.php?m=1');

    }else {
        echo "no se ha ejecutado la orden";
        
    }
}

?>