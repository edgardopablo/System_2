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
           <h1>Prueba Inyeccion Codigo</h1>
       <form action="inyeccion.php" method="POST" onsubmit="return validarCampo(this)">
          <div class="form-group">
            <label for="exampleInputEmail1">Usuario</label>
            <input type="text" class="form-control" name="usuario" id="usuario"></div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password"  id="password">
          </div>
          <button type="submit" class="btn btn-primary">Probar Login</button>
        </form>
       
       </div>
       
       <script src="validaCampos.js"></script>
   </body> 
    
</html>