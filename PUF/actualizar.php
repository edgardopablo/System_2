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
    <title>registro</title>
</head>
<body>
    
  <h1>Formulario Actualizar</h1>
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
        
        //insertar resultados desde_POST
      $query = "UPDATE `empleados` set emp_id_gerencia='$id_gerencia',emp_id_empleado='$idempleado',
                emp_huella='$huella',emp_rut='$rut',emp_residuo='$residuo',emp_cod_cargo='$cod_cargo',emp_nombre='$nombre',
                emp_paterno='$paterno',emp_materno='$materno',emp_vigente='$vigente' where emp_id_empleado='$idempleado'";

      $result = mysqli_query($conexion, $query) or die('Ocurrió un error en la consulta SQL');
          //echo "Usuario Actualizado con éxito a la Base de Datos";
        header('Location: http:actualizaexito.html');
      
  
   } else {  
    echo "Id Usuario no existe en nuestra base";
      mysqli_close($conexion);
    }
    
    
    
    
    ?>
    
  

    
</body>
</html>


