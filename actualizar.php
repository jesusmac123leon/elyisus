<?php

include "config.php";
    session_start();
    error_reporting(0);

$id=$_GET['id'];

$sql="SELECT * FROM usuarios WHERE codigo='$id'";
$query=mysqli_query($conn,$sql);

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
                    
                                <input type="hidden" name="codigo" value="<?php echo $row['codigo']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="distrito" placeholder="Distrito" value="<?php echo $row['distrito']  ?>">
                                <input type="text" class="form-control mb-3" name="municipio" placeholder="Municipio" value="<?php echo $row['municipio']  ?>">
                                <input type="text" class="form-control mb-3" name="seccion" placeholder="Sección" value="<?php echo $row['seccion']  ?>">
                                <input type="text" class="form-control mb-3" name="representante" placeholder="Representante" value="<?php echo $row['representante']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
