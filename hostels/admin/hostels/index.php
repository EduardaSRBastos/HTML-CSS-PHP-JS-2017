
<!DOCTYPE html>
<html>
<head>
	<title>Hostels</title>
	<link rel="stylesheet" type="text/css" href="css/ex15.css">
</head>
<body>
	<h1>Listagem de Hostels</h1>
	<a href="new.php"> Criar novo hostel</a> <br><br>
	<?php
    include "../stats/stats.inc.php";
	$sql ="SELECT * FROM hostels ORDER BY id";
	$dados =db_query($sql);
	if(count($dados)){
	echo "<table border=1>";
	foreach($dados as $key => $value){
	echo "<tr>";
	echo "<td>".$value["id"]."</td>".
	"<td>".$value["titulo"]."</td>".
	"<td>".$value["descricao"]."</td>".
	"<td>".$value["foto"]."</td>".
	"<td>".$value["cidade"]."</td>".
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
