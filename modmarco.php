<?php
require "conexion.php";
$id=$_REQUEST['id'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];

$consulta= "update marcos SET precio = '$precio', cantidad = '$cantidad' where id_marcos = $id";

if(mysqli_query($conexion,$consulta) ){
    header('Location: listadodelentes.php');
}else{
    echo"Error al actualizar";
}
$conexion->close();
?>