
<!DOCTYPE html>
<html>
<head>
	<title>Destaques</title>
	<link rel="stylesheet" type="text/css" href="css/ex15.css">
</head>
<body>	
<?php
 include "../../include/folder.inc.php";
    include $arrFOLDER["dir_site_admin"]. "/include/control.inc.php";
    include $arrFOLDER["dir_site"]."/include/funcao.inc.php";
    include $arrFOLDER["dir_site"]."/include/settings.inc.php";
if(isset($_GET["id"])){
		$tipo="Editar";	
	  
        $id=$_GET["id"];
         $sql ="SELECT * FROM stats WHERE id='$id'";
        $dados =db_query($sql);

        $url = $dados[0]["url"];
        $ip = $dados[0]["ip"];
        $session = $dados[0]["session"];
         $datahora = $dados[0]["datahora"];
        $id_user = $dados[0]["id_user"];
        $admin = $dados[0]["admin"];
        }
else{

    $tipo ="Novo";
    $id=0;
    $url='';
$ip='';
$session='';
$datahora='';
 $id_user='';
$admin=0;
	}

?>

<h1><?php echo $tipo; ?> Estatística
 </h1>
<form name="frmContactos" action="resultado.php" method="post" enctype="multipart/form-data" onsubmit=" return checkfields()">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	Url<input type="text" name="url" value="<?php echo $url; ?>" > <br>
	IP<input type="text" name="ip" value="<?php echo $ip; ?>" > <br>
	Sessão<input type="text" name="session" value="<?php echo $session; ?>" > <br>
	Data/Hora<input type="datetime-local" name="datahora" value="<?php echo $datahora; ?>" > <br>
	id_utilizador<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="id_user" value="<?php echo $id_user; ?>" > <br>
	admin<input type="checkbox" name="admin" value="1" <?php echo ($admin ? 'checked="checked"' : ''); ?>><br>
	<input type="submit" name="mostrar">
    <input type="button" value="Voltar" onclick= "javascript:history.back()" />
</form>

<script>
	function checkfields() {
        if(document.frmContactos.url.value == "") {
            alert("Tem de preencher o campo url!");
            document.frmContactos.url.focus();
            return false;
        }
        if(document.frmContactos.ip.value == "") {
            alert("Tem que preencher o campo ip!");
            document.frmContactos.ip.focus();
            return false;
        }  
          if(document.frmContactos.session.value == "") {
            alert("Tem de preencher o campo sessão!");
            document.frmContactos.session.focus();
            return false;
        }
        if(document.frmContactos.datahora.value == "") {
            alert("Tem que preencher o campo data/hora!");
            document.frmContactos.datahora.focus();
            return false;
        }   if(document.frmContactos.id_user.value == "") {
            alert("Tem de preencher o campo id user!");
            document.frmContactos.id_user.focus();
            return false;
        }
      
        return true;
    }
</script>
</body>
</html>
