<?php
//include 'valida.php';

$host='localhost';
$user='root';
$pass='';
$db='controlacceso';
$conexion=mysqli_connect($host,$user,$pass,$db);


if(!$conexion){
    echo "no se pudo conectar a la bd".mysql_error();
}else{
    echo "<h1>Funcion real_escape_string contra Inyeccion codigo</h1>";
}
$_user=$conexion->real_escape_string($_POST['usuario']);
$pass=$conexion->real_escape_string($_POST['password']);
//$_user='usertest';


?>

 <table border="1" >
		<tr class="bg-light">
            <td>Id_user</td>
			<td>usuario</td>
			<td>pass</td>
		</tr>

		<?php 
		//$sql="SELECT * FROM `test` WHERE `usuario`='usertest'";
    	$sql="SELECT * FROM `administrador` WHERE `nombre` = '$_user' AND `password` = '$pass'";
		$result=mysqli_query($conexion,$sql);
	

		while($mostrar=mysqli_fetch_array($result)){
		 ?>


		<tr>
			<td><?php echo $mostrar['id_admin'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['password'] ?></td>
           
		</tr>
	<?php 
	}
	 ?>
	</table>

<div>
<button type="submit" name="boton" class="btn btn-warning"><a href="tablero.php">Volver</a></button>  
</div>