<?php
session_start();
error_reporting(0);
$session=$_SESSION['id_admin'];

if ($session == null || $session=''){
echo "Usted no está autorizado";
die();
}
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title> Taller</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    
    <script src="https://kit.fontawesome.com/2ade025446.js" crossorigin="anonymous"></script>
    
</head>
<body>
<div class="container bg-ligth p-5">
    <h1>Bienvenido Admin, Registra el usario final usando el formulario</h1>
    <div class="row">
        
        
        <div class="col-lg-4">
            <?php include 'menuPuf.php';?>
        </div>
        
        <div class="col-lg-8">
        

        <form class="form-group bg-light p-5" action="eliminar.php" method="POST" id="registro" class="p-3" onsubmit="return validar(this)">
            <h3 class="text-left">Formularios Administración</h3>
            <h3>Eliminar Usuario</h3>
           <div  class="form-group">
      <input type="text" name="rut" placeholder="Ingrese rut a eliminar" id="rut"><br><br>
         <input type="submit" value="Eliminar">
</div>
        </form>
        </div>
    
    </div>
     </div>
        
    
<script src="valida.js"></script>

</body>
</html>