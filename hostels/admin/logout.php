<?php 
include "../include/folder.inc.php";
include $arrFOLDER["dir_site_admin"]."/include/control.inc.php";

unset($_SESSION["LOGIN_VALIDO"]);
session_destroy();
header("Location: ".$arrFOLDER["url_site_admin"]."/login.php");
 ?>
