<?php 
    include "config.php";
    session_start();
    error_reporting(0);

    $sql="SELECT *  FROM usuarios1";
    $query=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($query);
    session_start();

if(!isset($_SESSION['username'])){
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA DE REGISTRO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="codigo" placeholder="Código">
                                    <input type="text" class="form-control mb-3" name="distrito" placeholder="Distrito">
                                    <input type="text" class="form-control mb-3" name="municipio" placeholder="Municipio">
                                    <input type="text" class="form-control mb-3" name="seccion" placeholder="Sección">
                                    <input type="text" class="form-control mb-3" name="representante" placeholder="Representante">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Código</th>
                                        <th>Distrito</th>
                                        <th>Municipio</th>
                                        <th>Sección</th>
                                        <th>Representante</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['codigo']?></th>
                                                <th><?php  echo $row['distrito']?></th>
                                                <th><?php  echo $row['municipio']?></th>
                                                <th><?php  echo $row['seccion']?></th>
                                                <th><?php  echo $row['representante']?></th>        
                                                <th><a href="actualizar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['codigo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    
            </div>
            <br>
            <br>
            <a href="logout.php">Cerrar Sesión</a>
    </body>
</html>