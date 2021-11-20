<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM pedido";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Alta Pedido</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Alta Pedido</h1>
                                <form action="insertar.php" method="POST">
                                <input type="text" class="form-control mb-3" name="IDpedido" placeholder="IDpedido">

                                    <input type="text" class="form-control mb-3" name="NombreCliente" placeholder="Ingresa nombre">
                                    <input type="text" class="form-control mb-3" name="IngresaPedido" placeholder="Ingresa pedido">
                                    <input type="text" class="form-control mb-3" name="Direccion" placeholder="Ingresa direccion">
                                    <input type="text" class="form-control mb-3" name="MetodoPago" placeholder="Ingresa metodo pago">
                                    <input type="number" class="form-control mb-3" name="Propina" placeholder="Ingresa propina">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                    <th>IDpedido</th>
                                        <th>Ingresa nombre</th>
                                        <th>Ingresa pedido</th>
                                        <th>Ingresa direccion</th>
                                        <th>Ingresa metodo pago</th>
                                        <th>Ingresa propina</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                            <th><?php  echo $row['IDpedido']?></th>
                                                <th><?php  echo $row['NombreCliente']?></th>
                                                <th><?php  echo $row['IngresaPedido']?></th>
                                                <th><?php  echo $row['Direccion']?></th>
                                                <th><?php  echo $row['MetodoPago']?></th>    
                                                <th><?php  echo $row['Propina']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row ['IDpedido']  ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row ['IDpedido'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>