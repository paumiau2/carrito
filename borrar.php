<?php
session_start();

$key=$_GET['key'];
unset($_SESSION['carrito'][$key]);
header('location:verCarrito.php?m=1');