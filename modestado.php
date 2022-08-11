<?php
require "conexion.php";

$id=$_REQUEST['id'];


$consulta= "update pacientes SET estado = CASE WHEN estado = 'Entregado' THEN 'Enviado a confección' 
            WHEN estado = 'Enviado a confección' THEN 'Entregado' END WHERE id_atencion='$id' ";

if(mysqli_query($conexion,$consulta) ){

    header('Location: buscador.php');

}else{
    echo"Error al actualizar";
    
}
$conexion->close();
?>