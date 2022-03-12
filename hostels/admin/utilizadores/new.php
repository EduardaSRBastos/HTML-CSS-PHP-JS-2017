
<!DOCTYPE html>
<html>
<head>
	<title>Destaques</title>
	<link rel="stylesheet" type="text/css" href="css/ex15.css">
</head>
<body>	
<?php
    include "../stats/stats.inc.php";
if(isset($_GET["id"])){
		$tipo="Editar";	
	  
        $id=$_GET["id"];
         $sql ="SELECT * FROM utilizadores WHERE id='$id'";
        $dados =db_query($sql);

        $username = $dados[0]["username"];
        $password = $dados[0]["password"];
        $activo = $dados[0]["activo"];
        }
else{

    $tipo ="Novo";
    $id=0;
     $username="";
    $password="";
   $activo=1;
	}

?>

<h1><?php echo $tipo; ?> destaque </h1>
<form name="frmContactos" action="resultado.php" method="post" enctype="multipart/form-data" onsubmit=" return checkfields()">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	Username<input type="text" name="username" value="<?php echo $username; ?>" > <br>
	password<input type="password" name="password" value="<?php echo $password; ?>" > <br>
	Activo<input type="checkbox" name="activo" value="1" <?php echo ($activo ? 'checked="checked"' : ''); ?>><br>
	<input type="submit" name="mostrar">
    <input type="button" value="Voltar" onclick= "javascript:history.back()" />
</form>

<script>
	function checkfields() {
        if(document.frmContactos.username.value == "") {
            alert("Tem de preencher o campo username!");
            document.frmContactos.username.focus();
            return false;
        }
        if(document.frmContactos.password.value == "") {
            alert("Tem que preencher o campo password!");
            document.frmContactos.password.focus();
            return false;
        }  
                
        return true;
    }
</script>
</body>
</html>
