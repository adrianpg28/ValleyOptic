<?php
require  "conexion.php";
$id=$_REQUEST['id'];

$sql="delete from pacientes where id_atencion=$id";

if(mysqli_query($conexion,$sql))
{
    echo "El usuario ha sido eliminado con exito.";
    header('Location: buscador.php');

}
else
{
    echo "error al borrar";
}
?>