<?php
session_start();
error_reporting(0);
$session=$_SESSION['id_admin'];

if ($session == null || $session=''){
echo "Usted no está autorizado";
die();
}
?>

<html>
<head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">   
</head>
<body>
  <div class="container">
      <h1>Prueba de Validacion datos Formulario OK</h1>
<button type="submit" name="boton" class="btn btn-warning"><a href="tablero.php">Volver</a></button>  
</div>  
    
</body>


</html>

