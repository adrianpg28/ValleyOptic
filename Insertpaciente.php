<?php

include "conexion.php";

$lejoscristal=$_REQUEST['lejoscristales'];
$lejosarm=$_REQUEST['lejosarmazon'];
$cercacristal=$_REQUEST['cercacristales'];
$cercaarm=$_REQUEST['cercaarmazon'];

$sql = "select * from marcos, cristales WHERE nombremarco='$lejosarm' AND tipoc='$lejoscristal' ";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        $totall = $row['precio'] + $row['precioc'];

    }
    } else {
}

$sql = "select * from marcos, cristales WHERE nombremarco='$cercaarm' AND tipoc='$cercacristal' ";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        $totalc = $row['precio'] + $row['precioc'];

    }
    } else {
}


require "conexion.php";

$nombre=$_POST['nombre'];
$rutp=$_POST['rutp'];
$direccion=$_POST['direccion'];
$comuna=$_POST['comuna'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];

$lejosojoderechoESF=$_POST['lejosojoderechoESF'];
$lejosojoderechoCYL=$_POST['lejosojoderechoCYL'];
$lejosojoderechoEJE=$_POST['lejosojoderechoEJE'];
$lejosojoizquierdoESF=$_POST['lejosojoizquierdoESF'];
$lejosojoizquierdoCYL=$_POST['lejosojoizquierdoCYL'];
$lejosojoizquierdoEJE=$_POST['lejosojoizquierdoEJE'];
$lejosDP=$_POST['lejosDP'];
$lejoscristales=$_POST['lejoscristales'];
$lejosarmazon=$_POST['lejosarmazon'];

$cercaojoderechoESF=$_POST['cercaojoderechoESF'];
$cercaojoderechoCYL=$_POST['cercaojoderechoCYL'];
$cercaojoderechoEJE=$_POST['cercaojoderechoEJE'];
$cercaojoizquierdoESF=$_POST['cercaojoizquierdoESF'];
$cercaojoizquierdoCYL=$_POST['cercaojoizquierdoCYL'];
$cercaojoizquierdoEJE=$_POST['cercaojoizquierdoEJE'];
$cercaDP=$_POST['cercaDP'];
$cercacristales=$_POST['cercacristales'];
$cercaarmazon=$_POST['cercaarmazon'];
$estado=$_POST['estado'];
$total=$totall + $totalc;

$sql = "insert into pacientes (rutp, nombre, direccion, comuna, email, telefono, lejosojoderechoESF, lejosojoderechoCYL, lejosojoderechoEJE, lejosojoizquierdoESF, lejosojoizquierdoCYL, lejosojoizquierdoEJE, 
lejosDP, lejoscristales, lejosarmazon, cercaojoderechoESF, cercaojoderechoCYL, cercaojoderechoEJE, cercaojoizquierdoESF, cercaojoizquierdoCYL, cercaojoizquierdoEJE, cercaDP, 
cercacristales, cercaarmazon, estado, total)

values('$rutp', '$nombre','$direccion', '$comuna', '$email', '$telefono', '$lejosojoderechoESF', '$lejosojoderechoCYL','$lejosojoderechoEJE','$lejosojoizquierdoESF', '$lejosojoizquierdoCYL', '$lejosojoizquierdoEJE', 
'$lejosDP', '$lejoscristales', '$lejosarmazon', '$cercaojoderechoESF', '$cercaojoderechoCYL', '$cercaojoderechoEJE', '$cercaojoizquierdoESF', '$cercaojoizquierdoCYL', '$cercaojoizquierdoEJE', '$cercaDP',
'$cercacristales', '$cercaarmazon', '$estado', '$total')";

if($conexion->query($sql) === TRUE){

    echo "Paciente ingresado con exito.";
    header('Location: orden.php');

}else{
    echo"Error: ". $sql . " <br>". $conexion->error;
}   

?>
