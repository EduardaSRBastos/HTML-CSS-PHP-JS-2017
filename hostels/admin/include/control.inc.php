<?php 
@session_start();

if(!(isset($_SESSION["LOGIN_VALIDO"]) && $_SESSION["LOGIN_VALIDO"])){
header("Location: ".$arrFOLDER["url_site_admin"]."/login.php");
}
 ?>
