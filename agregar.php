<?php
session_start();

$producto=$_GET['producto'];
$precio=$_GET['precio'];
$_SESSION['carrito'][]=array('producto'=>$producto, 'precio'=>$precio);
//print_r($_SESSION['carrito']);
header('location:main.php?m=2');