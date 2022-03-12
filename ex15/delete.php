<?php
include "include/funcao.inc.php";
include "include/settings.inc.php";
if(!isset($_GET["id"])){
	die("Erro!");
}
$ID=$_GET["id"];

$sql="DELETE FROM Contactos WHERE ID='$ID'";
db_query($sql);
db_close();
header("Location: index.php");
?>
