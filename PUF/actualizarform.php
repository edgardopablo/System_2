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
      <form action="actualizar.php" method="POST" id="actualiza" class="p-3" onsubmit="return validar(this)">
    <h3 class="text-left">Formularios Administración</h3>
            <h3>Actualizar Usuario</h3>
     <input type="text" name="idempleado" placeholder="ingresa id empleado" id="idempleado"><br><br>
            <!--<input type="text" name="huella" placeholder="huella activa"><br><br>-->
            <input type="text" name="rut" placeholder="ingresa rut" id="rut">
            <input type="text" name="residuo" placeholder="DV" id="residuo">
            <br><br>
            <input type="text" name="cod_cargo" placeholder="ingresa cargo" id="cod_cargo"><br><br>
            <input type="text" name="nombre" placeholder="ingresa nombre" id="nombre"><br><br>
            <input type="text" name="paterno" placeholder="Apellido Paterno" id="paterno"><br><br>
            <input type="text" name="materno" placeholder="Apellido Materno" id="materno"><br><br>
            <label>Ingresa estado del Empleado</label><br>

            <select name="vigente" id="vigente"> 
                <option value="">elija su opcion</option>
                <option value="activo">activo</option>
                <option value="desactivo">desactivo</option>
            </select><br><br>
            <input type="submit" value="Actualizar">
    </form>
        </div>
    
    </div>
     </div>
        
    
<script src="valida.js"></script>

</body>
</html>