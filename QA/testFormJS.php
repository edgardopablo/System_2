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

<script src="https://kit.fontawesome.com/2ade025446.js" crossorigin="anonymous"></script>
    


     
</head>
<body>
<div class="container p-3">
			<div class="jumbotron">
			  <h1 class="display-4">Bienvenido al Portal QA Control de Versión</h1>
			  <p class="lead">Portal Administración de usuarios corporativos</p>
			  
			</div>


			<div class="row">
					<div class="col-lg-4">
					
					</div>
					<div class="col-lg-4 bg-light pt-2" >
						<h5>Test System 2.0</h5>
                        
                    <form action="pruebaok.php" method="POST" onsubmit="return validarTest(this)" >
					  <div class="form-group">
                        <label for="exampleInputEmail1">Ingrese un ID para asignar</label>
						<input type="text" class="form-control" name="id_admin" id="id_admin" maxlength="3" >
                        
                        <label for="exampleInputEmail1">Ingrese Nombre </label>
						<input type="text" class="form-control" name="nombre" id="nombre" maxlength="30">
                        
                        <label for="exampleInputEmail1">Ingrese Rut para el admin</label>
						<input type="text" class="form-control" name="rut" id="rut" maxlength="10">
                          
                        <label for="exampleInputEmail1">Ingrese una password</label>
						<input type="text" class="form-control" name="pass" id="pass" maxlength="8">                   	        
                        
                        <label for="exampleInputEmail1">Seleccione la Gerencia</label> 
                          <br>
                        <select id="gerencia" name="gerencia">
                          <option value="">Opcion</option>
                          <option value="1">Gerencia General</option>
                          <option value="2">Marketing</option>                        
                        </select>
                          
                          
						<small id="idadmin" class="form-text text-muted">Registro registrados. No prestes tus credenciales</small>
					  </div>
					  <!--<div class="form-group">
						<label for="exampleInputPassword1">Contraseña</label>
						<input type="password" class="form-control" id="exampleInputPassword1">
					  </div>-->
					  <button type="submit" class="btn btn-primary">Ingresar</button>
					</form>
					<script src="validaCampostest.js"></script>
					
					</div>
					<div class="col-lg-4"></div>
			</div>
</div>
</body>
<html>




