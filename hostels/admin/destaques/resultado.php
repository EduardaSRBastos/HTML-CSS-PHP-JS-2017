<?php
    include "../stats/stats.inc.php";
if(!isset($_POST["mostrar"])){
	die("Não está autorizado!");
}
$id = $_POST["id"];
$titulo = $_POST["titulo"];
$texto = $_POST["texto"];
$foto = $_POST["foto"];
$activo = (isset ($_POST["activo"]) ? $_POST["activo"] : 0);
if(!$_FILES["foto_temp"] ["error"])
{
	$foto=$_FILES["foto_temp"]["name"];
	move_uploaded_file($_FILES["foto_temp"]["tmp_name"], "../../upload/destaques/".$foto);
}
if(!$id){
	$sql="INSERT INTO destaques (titulo,texto,foto,activo) VALUES ('$titulo','$texto','$foto','$activo')";
}else{
	$sql="UPDATE destaques SET titulo='$titulo',texto='$texto',foto='$foto',activo='$activo' WHERE id='$id'";	
}
db_query($sql);
db_close();
header("Location: index.php");
?>
