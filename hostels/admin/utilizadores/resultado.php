<?php
    include "../stats/stats.inc.php";

if(!isset($_POST["mostrar"])){
	die("Não está autorizado!");
}
$id = $_POST["id"];
$username = $_POST["username"];

if($_POST["password"] != '')
{
	$password=password_hash($_POST["password"], PASSWORD_BCRYPT);
}

$activo = (isset ($_POST["activo"]) ? $_POST["activo"] : 0);
if(!$id){
	$sql="INSERT INTO utilizadores (username,password,activo) VALUES ('$username','$password','$activo')";
}else{
	$sql="UPDATE utilizadores SET username='$username'";
	if($_POST["password"]!= ''){
		$sql.=",password='$password'";
	}	
	$sql.=", activo ='$activo' WHERE id='$id'";
}
db_query($sql);
db_close();
header("Location: index.php");
?>
