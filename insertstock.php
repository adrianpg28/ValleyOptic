<?php
    require "conexion.php";

    $numeroserie=$_POST['numeroserie'];
    $nombremarco=$_POST['nombremarco'];
    $color=$_POST['color'];
    $tipo=$_POST['tipo'];
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];

    $sql = "insert into marcos (numeroserie, nombremarco, color, tipo, precio, cantidad)
    
    values('$numeroserie', '$nombremarco','$color', '$tipo', '$precio', '$cantidad')";

    if($conexion->query($sql) === TRUE){

        echo "Ingresado con exito.";
        header('Location: ingresodeStock.php');
       
    }else{
        echo"Error: ". $sql . " <br>". $conexion->error;
    }    
?>
