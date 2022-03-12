
<!DOCTYPE html>
<html>
<head>
	<title>Contactos</title>
	<link rel="stylesheet" type="text/css" href="css/ex15.css">
</head>
<body>	
<?php
if(isset($_GET["id"])){
		$tipo="Editar";	
	   include "include/funcao.inc.php";
        include "include/settings.inc.php";
        $ID=$_GET["id"];
        $sql ="SELECT * FROM Contactos WHERE ID='$ID'";
        $dados =db_query($sql);
        $nome = $dados[0]["nome"];
        $email = $dados[0]["email"];
        $tlm = $dados[0]["tlm"];
        $comentario = $dados[0]["comentario"];
        }
else{
    $tipo ="Novo";
    $ID=0;
    $nome="";
    $email="";
    $tlm="";
    $comentario="";
	}
?>
<h1><?php echo $tipo; ?> contacto </h1>
<form name="frmContactos" action="resultado.php" method="POST" onsubmit=" return checkfields()">
	<input type="hidden" name="ID" value="<?php echo $ID; ?>">
	Nome<input type="text" name="nome" > <br>
	Email<input type="text" name="email" > <br>
	Telemóvel<input type="text"  name="tlm" maxlength="15" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 43'> <br>
	Comentário<textarea name="comentario"></textarea> <br>
	<input type="submit" name="mostrar">
</form>
<script>
	function checkfields() {
        if(document.frmContactos.nome.value == "") {
            alert("Tem de preencher o campo nome!");
            document.frmContactos.nome.focus();
            return false;
        }
         if(document.frmContactos.email.value.indexOf("@")>-1) {           
        }
        else{
            alert("Tem de preencher um email válido!");
            document.frmContactos.email.focus();
            return false;
        }
       
         if(document.frmContactos.tlm.value == "") {
            alert("Tem que preencher o campo telemóvel!");
            document.frmContactos.tlm.focus();
            return false;
        }       
        return true;
    }
</script>
</body>
</html>
