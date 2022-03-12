
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
         $sql ="SELECT * FROM destaques WHERE id='$id'";
        $dados =db_query($sql);

        $titulo = $dados[0]["titulo"];
        $texto = $dados[0]["texto"];
        $foto = $dados[0]["foto"];
        $activo = $dados[0]["activo"];
        }
else{

    $tipo ="Novo";
    $id=0;
     $titulo="";
    $texto="";
    $foto="";
   $activo=1;
	}

?>

<h1><?php echo $tipo; ?> destaque </h1>
<form name="frmContactos" action="resultado.php" method="post" enctype="multipart/form-data" onsubmit=" return checkfields()">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	Título<input type="text" name="titulo" value="<?php echo $titulo; ?>" > <br>
	Texto<textarea name="texto"></textarea> <br>
	Foto<input type="file"  name="foto_temp"> <br>
	 <input type="hidden" name="foto" value="<?php echo $foto; ?>">
	 <img src="../../upload/destaques/<?php echo $foto;?>"><br>
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
        if(document.frmContactos.texto.value == "") {
            alert("Tem que preencher o campo texto!");
            document.frmContactos.texto.focus();
            return false;
        }  
                
        return true;
    }
</script>
</body>
</html>
