<?php
    include "../stats/stats.inc.php";
if(!isset($_GET["id"])){
	die("Erro!");
}

$id=$_GET["id"];

$sql="DELETE FROM destaques WHERE id='$id'";
db_query($sql);
db_close();
header("Location: index.php");
?>
