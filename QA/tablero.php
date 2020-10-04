<?php/*
session_start();
error_reporting(0);
$session=$_SESSION['id_admin'];

if ($session == null || $session=''){
echo "Usted no esta autorizado";
die();
}*/
?>

<html>
<head>
	<!--boostrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- font awesome-->
<script src="https://kit.fontawesome.com/2ade025446.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <h1>Portal Quality Assurance</h1>
    <?php include 'menu.php' ?>;
</div>
	
 </body>
</html>


