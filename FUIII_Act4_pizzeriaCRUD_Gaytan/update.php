<?php

include("conexion.php");
$con=conectar();

$IDpedido=$_POST['IDpedido'];
$NombreCliente=$_POST['NombreCliente'];
$IngresaPedido=$_POST['IngresaPedido'];
$Direccion=$_POST['Direccion'];
$MetodoPago=$_POST['MetodoPago'];
$Propina=$_POST['Propina'];

$sql="UPDATE pedido SET  NombreCliente='$NombreCliente',IngresaPedido='$IngresaPedido',Direccion='$Direccion',MetodoPago='$MetodoPago',Propina='$Propina' WHERE IDpedido='$IDpedido' ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pedido.php");
    }
?>