<?php     include "../stats/stats.inc.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Utilizadores</title>
	<link rel="stylesheet" type="text/css" href="css/ex15.css">
</head>
<body>
	<h1>Listagem de Utilizadores</h1>
	<a href="new.php"> Criar novo utilizador</a> <br><br>
	<?php
		
	$sql ="SELECT * FROM utilizadores ORDER BY id";
	$dados =db_query($sql);
	if(count($dados)){
	echo "<table border=1>";
	foreach($dados as $key => $value){
	echo "<tr>";
	echo "<td>".$value["id"]."</td>".
	"<td>".$value["username"]."</td>".
	"<td>".$value["password"]."</td>".
	"<td>".$value["activo"]."</td>".
	"<td><a href= 'delete.php?id=".$value["id"]."'>delete</a></td>".
	"<td><a href= 'new.php?id=".$value["id"]."'>update</a></td>";	
	echo "</tr>";
	}
	echo "</table>"; 
}
	?>
<a href='../../admin/'>
   <button>Voltar</button>
</a>
</body>
</html>
