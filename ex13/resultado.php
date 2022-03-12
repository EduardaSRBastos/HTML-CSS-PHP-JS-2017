<?php
if (($fp =fopen("resultado.txt", "a+")) !=null) {
	fwrite($fp, "\r\n ");
	fwrite($fp, "Nome:" .$_POST["nome"]. "\r\n ");
	fwrite($fp, "Morada:" .$_POST["morada"]. "\r\n ");
	fwrite($fp, "Data de Nascimento:" .$_POST["data"]. "\r\n ");
	fwrite($fp, "Email:" .$_POST["email"]. "\r\n ");
	fwrite($fp, "Género:" .$_POST["sexo"]. "\r\n ");
	fwrite($fp, "Disciplinas:" .$_POST["port"]. " ".$_POST["mat"]. " ".$_POST["pi"]. "\r\n ");
	fwrite($fp, "Turma:" .$_POST["turma"]. "\r\n ");
	fwrite($fp, "Ficheiro:" .$ficheiro = $_FILES["ficheiro"]["name"]. "\r\n ");
}
header("Location: index.html");
?>
