
<!DOCTYPE html>
<html>
<head>
	<title>Equipa</title>
	<link rel="stylesheet" type="text/css" href="css/ex15.css">
</head>
<body>	
<?php
    include "../stats/stats.inc.php";
if(isset($_GET["id"])){
		$tipo="Editar";	
	  
        $id=$_GET["id"];
         $sql ="SELECT * FROM equipa WHERE id='$id'";
        $dados =db_query($sql);

        $nome = $dados[0]["nome"];
        $funcao = $dados[0]["funcao"];
        $activo = $dados[0]["activo"];
        }
else{

    $tipo ="Novo";
    $id=0;
     $nome="";
    $funcao="";
   $activo=1;
	}

?>

<h1><?php echo $tipo; ?> equipa </h1>
<form name="frmContactos" action="resultado.php" method="post" enctype="multipart/form-data" onsubmit=" return checkfields()">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	Nome<input type="text" name="nome" value="<?php echo $nome; ?>" > <br>
	Função<input type="text" name="funcao" value="<?php echo $funcao; ?>" > <br>
	Activo<input type="checkbox" name="activo" value="1" <?php echo ($activo ? 'checked="checked"' : ''); ?>><br>
	<input type="submit" name="mostrar">
    <input type="button" value="Voltar" onclick= "javascript:history.back()" />
</form>

<script>
	function checkfields() {
        if(document.frmContactos.nome.value == "") {
            alert("Tem de preencher o campo nome!");
            document.frmContactos.nome.focus();
            return false;
        }
        if(document.frmContactos.funcao.value == "") {
            alert("Tem que preencher o campo texto!");
            document.frmContactos.funcao.focus();
            return false;
        }  
                
        return true;
    }
</script>
</body>
</html>
