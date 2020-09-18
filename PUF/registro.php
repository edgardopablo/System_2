<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>registro</title>
</head>
<body>
    
  <h1>Formulario Ingreso</h1>
<?php
    $server="127.0.0.1";
    $user="root";
    $password="";
    $bd="controlacceso";

    $conexion= mysqli_connect($server,$user,$password,$bd)
    or die("error de conexion");
    
    //echo "exito conexion <br>";

    
    $id_gerencia='1';
    $idempleado = $_POST['idempleado'];
    $huella = 'huellaok';
    $rut = $_POST['rut'];
    $residuo = $_POST['residuo'];
    $cod_cargo = $_POST['cod_cargo'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $vigente = $_POST['vigente'];

    
    $check=mysqli_query($conexion,"select * from empleados where emp_id_empleado='$idempleado' ");
 
    $checkrows=mysqli_num_rows($check);

    if($checkrows>0) {
      echo "Registro Ingresado ya existe en base de datos";
  
   } else {  
    //insertar resultados desde_POST
      $query = "INSERT INTO `empleados` ( `emp_id_gerencia`, `emp_id_empleado`,`emp_huella`,`emp_rut`,`emp_residuo`,`emp_cod_cargo`,`emp_nombre`,`emp_paterno`,`emp_materno`,`emp_vigente`) VALUES ('$id_gerencia', '$idempleado','$huella','$rut','$residuo','$cod_cargo','$nombre','$paterno','$materno','$vigente')";
        
     
      $result = mysqli_query($conexion, $query) or die('Ocurrió un error en la consulta SQL');
          header('Location: http:registraexito.html');
      mysqli_close($conexion);
    }

    
    ?>
    

    
</body>
</html>


