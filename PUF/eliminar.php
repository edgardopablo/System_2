<?php 
$session=$_SESSION['id_admin']='Edgardo Pablo Roa Flores';

session_start();



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
    
  <h1>Formulario Eliminacion</h1>
<?php
    $server="127.0.0.1";
    $user="root";
    $password="";
    $bd="controlacceso";

    $conexion= mysqli_connect($server,$user,$password,$bd)
    or die("error de conexion");
    
    echo "exito conexion <br>";
    
    //$nombre = $_POST['nombre'];

    //$rut = '8713094';
    $rut = $_POST['rut'];
    
    //echo "$nombre";
        
    mysqli_query($conexion,"DELETE from `empleados` where emp_rut='$rut'") or die("fallo registro");
    mysqli_close($conexion);
     header('Location: http:eliminaexito.html');
    ?>
    

    
</body>
</html>