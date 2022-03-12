
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
         $sql ="SELECT * FROM hostels WHERE id='$id'";
        $dados =db_query($sql);

        $titulo = $dados[0]["titulo"];
        $descricao = $dados[0]["descricao"];
        $foto = $dados[0]["foto"];
        $cidade = $dados[0]["cidade"];
        $activo = $dados[0]["activo"];

        }
else{

    $tipo ="Novo";
    $id=0;
    $titulo="";
    $descricao="";
    $foto="";
    $cidade="";
    $activo=1;
	}

?>

<h1><?php echo $tipo; ?> destaque </h1>
<form name="frmContactos" action="resultado.php" method="post" enctype="multipart/form-data" onsubmit=" return checkfields()">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	Título<input type="text" name="titulo" value="<?php echo $titulo; ?>" > <br>
	Descrição<textarea name="descricao"></textarea> <br>
	Foto<input type="file"  name="foto_temp"> <br>
	 <input type="hidden" name="foto" value="<?php echo $foto; ?>">
	 <img src="../../upload/hostels/<?php echo $foto;?>"><br>
	 Cidade<input type="text" name="cidade" value="<?php echo $cidade; ?>" > <br>
	Activo<input type="checkbox" name="activo" value="1" <?php echo ($activo ? 'checked="checked"' : ''); ?>><br>
	<input type="submit" name="mostrar">
    <input type="button" value="Voltar" onclick= "javascript:history.back()" />
</form>

<script>
	function checkfields() {
        if(document.frmContactos.titulo.value == "") {
            alert("Tem de preencher o campo título!");
            document.frmContactos.titulo.focus();
            return false;
        }
        if(document.frmContactos.descricao.value == "") {
            alert("Tem que preencher o campo descrição!");
            document.frmContactos.descricao.focus();
            return false;
        }  
                
        return true;
    }
</script>
</body>
</html>
