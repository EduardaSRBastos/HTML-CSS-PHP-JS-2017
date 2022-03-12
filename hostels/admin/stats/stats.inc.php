<?php
include "../../include/folder.inc.php";
	include $arrFOLDER["dir_site_admin"]. "/include/control.inc.php";
	include $arrFOLDER["dir_site"]."/include/funcao.inc.php";
	include $arrFOLDER["dir_site"]."/include/settings.inc.php";
$ip=$_SERVER['REMOTE_ADDR'];
$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if($url == "http://web.colgaia.local/12itm09/hostels/"){
	$admin = 0;
}else{
	$admin = 1;
}
$datahora = date('Y-m-d H:i:s');
$session = session_id();
@$aux = $_SESSION["username"];

$sql = "SELECT id FROM utilizadores WHERE username = '$aux'" ;
$dados = db_query($sql);

if(isset($dados[0]['id'])){
	foreach($dados as $v){
		$id_user = $v["id"];
	}
}else{
	$id_user = "";
}
	$sql="INSERT INTO stats (url,ip,session,datahora,id_user,admin) VALUES ('$url','$ip','$session','$datahora','$id_user','$admin')";
$dados = db_query($sql);


?>
