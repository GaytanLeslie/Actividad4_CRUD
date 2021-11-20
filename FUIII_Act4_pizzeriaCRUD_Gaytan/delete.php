<?php

include("conexion.php");
$con=conectar();

$IDpedido=$_GET['id'];

$sql="DELETE FROM pedido  WHERE IDpedido='$IDpedido'  ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pedido.php");
    }
?>
