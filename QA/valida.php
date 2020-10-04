<?php
$conexion=mysqli_connect('localhost','root','');
if (!$conexion)
{
	die('Fallo en la conexion a BD'.mysqli_error());
}
else{
echo '<h1>conectado satisfactoriamente</h1>'."</br>";
}

/*$db_selected=mysqli_select_db('bloquecr_test','$conexion');
if (!$db_selected)
{
	die(' no pudo conectar a '.$db_selected.mysqli_error());
}
else {
    echo 'conectado satisfactoriamente';
    
}*/


?>

<div>
<button type="submit" name="boton" class="btn btn-warning"><a href="tablero.php">Volver</a></button>  
</div>

