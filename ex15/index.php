
<!DOCTYPE html>
<html>
<head>
	<title>Contactos</title>
	<link rel="stylesheet" type="text/css" href="css/ex15.css">
</head>
<body>
	<h1>Listagem de Contactos</h1>
	<a href="new.php"> Criar novo contacto</a> <br><br>
	<?php
	include "include/funcao.inc.php";
	include "include/settings.inc.php";
	$sql ="SELECT * FROM Contactos ORDER BY ID";
	$dados =db_query($sql);
	if(count($dados)){
	echo "<table border=1>";
	foreach($dados as $key => $value){
	echo "<tr>";
	echo "<td>".$value["ID"]."</td>".
	"<td>".$value["nome"]."</td>".
	"<td>".$value["email"]."</td>".
	"<td>".$value["tlm"]."</td>".
	"<td>".$value["comentario"]."</td>".
	"<td><a href= 'delete.php?id=".$value["ID"]."'>delete</a></td>".
	"<td><a href= 'new.php?id=".$value["ID"]."'>update</a></td>";	
	echo "</tr>";
	}
	echo "</table>";
}
	?>
}

</body>
</html>
