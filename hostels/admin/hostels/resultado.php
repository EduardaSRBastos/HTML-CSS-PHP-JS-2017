<?php
    include "../stats/stats.inc.php";
if(!isset($_POST["mostrar"])){
	die("Não está autorizado!");
}
$id = $_POST["id"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$foto = $_POST["foto"];
$cidade = $_POST["cidade"];
$activo = (isset ($_POST["activo"]) ? $_POST["activo"] : 0);
if(!$_FILES["foto_temp"] ["error"])
{
	$foto=$_FILES["foto_temp"]["name"];
	move_uploaded_file($_FILES["foto_temp"]["tmp_name"], "../../upload//hostels/".$foto);
}
if(!$id){
	$sql="INSERT INTO hostels (titulo,descricao,foto,cidade,activo) VALUES ('$titulo','$descricao','$foto','$cidade','$activo')";
}else{
	$sql="UPDATE hostels SET titulo='$titulo',descricao='$descricao',foto='$foto',cidade='$cidade', activo='$activo' WHERE id='$id'";	
}
db_query($sql);
db_close();
header("Location: index.php");
?>
