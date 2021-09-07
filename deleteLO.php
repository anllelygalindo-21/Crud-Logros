<?php

include("conexionLO.php");
$con=conectar();

if(isset($_GET['id_logro'])) {
  $id_logro = $_GET['id_logro'];
  $query = "DELETE FROM logros WHERE id_logro='$id_logro'";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");

  }
  header("Location: logros.php"); 
}

?>