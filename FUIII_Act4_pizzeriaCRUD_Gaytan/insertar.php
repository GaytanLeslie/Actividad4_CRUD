<?php
include("conexion.php");
$con=conectar();

$IDpedido=$_POST['IDpedido'];
$NombreCliente=$_POST['NombreCliente'];
$IngresaPedido=$_POST['IngresaPedido'];
$Direccion=$_POST['Direccion'];
$MetodoPago=$_POST['MetodoPago'];
$Propina=$_POST['Propina'];


$sql= "INSERT INTO pedido(IDpedido, NombreCliente, IngresaPedido, Direccion, MetodoPago, Propina) 
VALUES ('$IDpedido','$NombreCliente','$IngresaPedido','$Direccion','$MetodoPago','$Propina')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: pedido.php");
    
}else {
}
?>