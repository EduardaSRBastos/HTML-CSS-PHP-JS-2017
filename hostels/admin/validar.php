<?php 
include "../include/folder.inc.php";
	include $arrFOLDER["dir_site"]."/include/funcao.inc.php";
	include $arrFOLDER["dir_site"]."/include/settings.inc.php";
$usr=$_POST["usr"];
$pwd=$_POST["pwd"];
$sql="SELECT * FROM utilizadores WHERE username ='$usr' AND activo = 1";
$res=db_query($sql);
db_close();
if(count($res)){
	if(password_verify($pwd, $res[0]["password"])){
	@session_start();
	$_SESSION["LOGIN_VALIDO"] = 1;
	$_SESSION["username"] = $usr;
	header("Location: ".$arrFOLDER["url_site_admin"]."/index.php");
	exit;
}}
header("Location: ".$arrFOLDER["url_site_admin"]."/login.php");
 ?>