<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM pedido WHERE IDpedido='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    <input type="hidden" name="IDpedido" value="<?php echo $row['IDpedido']  ?>">
                                <input type="text" class="form-control mb-3" name="NombreCliente" placeholder="Ingresa nombre" value="<?php echo $row['NombreCliente']  ?>">
                                <input type="text" class="form-control mb-3" name="IngresaPedido" placeholder="Ingresa pedido" value="<?php echo $row['IngresaPedido']  ?>">
                                <input type="text" class="form-control mb-3" name="Direccion" placeholder="Ingresa direccion" value="<?php echo $row['Direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="MetodoPago" placeholder="Ingresa metodo pago" value="<?php echo $row['MetodoPago']  ?>">
                                <input type="number" class="form-control mb-3" name="Propina" placeholder="Ingresa propina" value="<?php echo $row['Propina']  ?>">


                            
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>