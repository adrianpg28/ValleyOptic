<?php
require  "conexion.php";

$id=$_REQUEST['id'];

$sql="delete from marcos where id_marcos=$id";
if(mysqli_query($conexion,$sql))
{
    echo "El paciente ha sido eliminado con exito.";
    header('Location: listadodelentes.php');

}
else
{
    echo "error al borrar";
}
?>