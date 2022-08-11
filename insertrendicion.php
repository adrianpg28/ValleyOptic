<?php
    require "conexion.php";

    $entregaefectivo=$_POST['entregaefectivo'];
    $entregatransbank=$_POST['entregatransbank'];
    $entregatransferencia=$_POST['entregatransferencia'];
    $ventasefectivo=$_POST['ventasefectivo'];
    $ventastransbank=$_POST['ventastransbank'];
    $ventastransferencia=$_POST['ventastransferencia'];
    $gastospersonal=$_POST['gastospersonal'];
    $gastosmateriales=$_POST['gastosmateriales'];

    $sql = "insert into rendicion (entregaefectivo, entregatransbank, entregatransferencia, ventasefectivo, ventastransbank, ventastransferencia, gastospersonal, gastosmateriales)
    
    values('$entregaefectivo', '$entregatransbank','$entregatransferencia', '$ventasefectivo', '$ventastransbank', '$ventastransferencia', '$gastospersonal', '$gastosmateriales')";

    if($conexion->query($sql) === TRUE){

        echo "Ingresado con exito.";
        header('Location: rendicion.php');
       
    }else{
        echo"Error: ". $sql . " <br>". $conexion->error;
    }    
?>
