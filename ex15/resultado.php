<?php
include "include/funcao.inc.php";
include "include/settings.inc.php";
if(!isset($_POST["mostrar"])){
	die("Não está autorizado!");
}
$id =$_POST["ID"];
$nome=$_POST["nome"];
$email=$_POST["email"];
$tlm=$_POST["tlm"];
$comentario=$_POST["comentario"];
if(!$id){
	$sql="INSERT INTO Contactos (nome,email,tlm,comentario) VALUES ('$nome','$email','$tlm','$comentario')";
}else{
	$sql="UPDATE Contactos SET nome='$nome',email='$email',tlm='$tlm',comentario='$comentario' WHERE id='$ID'";	
}
db_query($sql);
db_close();
header("Location: index.php");
?>
