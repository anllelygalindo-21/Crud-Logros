<?php 
    include("conexionLO.php");
    $con=conectar();

$id_logro=$_GET['id_logro'];

$sql="SELECT * FROM logros WHERE id_logro='$id_logro'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ACTUALIZAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar_Docente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     </head>
    <body>
<body style="background:#9EECE5;">
            <img src="logogrupo.PNG" width="100" height="100" border-radius="20px">

                <div class="container mt-5">
                    <div style="width: 50%; margin-left: 25%;background-color:#9EECE5; ">
                <h1 style= "font-family: candy randy"><font color="#000000"><b>Actualizar</h1>
                <form action="updateLO.php" method="POST">

        <input type="hidden" name="id_logro" value="<?php echo $row['id_logro']  ?>">

<label for="nom_logro">NOMBRE DEL LOGRO</label>
    <input type="text" class="form-control mb-3" name="nom_logro" id="nom_logro"  value="<?php echo $row['nom_logro']  ?>">

<label for="per_logro">PERIODO DEL LOGRO</label>
    <select  type="text" class="form-control mb-3" id="per_logro" name="per_logro" value="<?php  echo $row['per_logro']  ?>">
        <option value="<?php echo $row['per_logro'] ?>"> Selecione un opción  </option>
        <option value="1">Primer Periodo</option>
        <option value="2">Segundo Periodo</option>
        <option value="3">Tercer Periodo</option>
        <option value="4">Cuarto Periodo</option>
    </select>

<label for="id_ano_esc">AÑO ESCOLAR</label>    
    <select type="text" class="form-control mb-3" name="id_ano_esc"  value="<?php echo $row['id_ano_esc']  ?>">
        <option value="<?php echo $row['id_ano_esc'] ?>">Seleccione una opción</option>
        <option value="1">2021</option>
        <option value="2">2020</option>
    </select>


                               

                            <input type="submit"style="background-color:#000000;font-family: arial ; border-color:#F5F5DC;" class="btn btn-danger" value=Actualizar>
                    </form>
                    <th><label for="busqueda"></label><br><a href="logros.php" class="btn btn-info">VOLVER</a></th>
                    
                </div>
                    </div>
    </body>
</html>
                    
                        
</html>