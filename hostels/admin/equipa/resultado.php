<?php
    include "../stats/stats.inc.php";
if(!isset($_POST["mostrar"])){
	die("Não está autorizado!");
}
$id = $_POST["id"];
$nome = $_POST["nome"];
$funcao = $_POST["funcao"];
$activo = (isset ($_POST["activo"]) ? $_POST["activo"] : 0);
if(!$_FILES["foto_temp"] ["error"])
{
	$foto=$_FILES["foto_temp"]["name"];
	move_uploaded_file($_FILES["foto_temp"]["tmp_name"], "../../upload/".$foto);
}
if(!$id){
	$sql="INSERT INTO equipa (nome,funcao,activo) VALUES ('$nome','$funcao','$activo')";
}else{
	$sql="UPDATE equipa SET nome='$nome',funcao='$funcao',activo='$activo' WHERE id='$id'";	
}
db_query($sql);
db_close();
header("Location: index.php");
?>
