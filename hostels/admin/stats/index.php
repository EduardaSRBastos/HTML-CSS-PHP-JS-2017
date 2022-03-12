<?php include "../../include/folder.inc.php";
	include $arrFOLDER["dir_site_admin"]. "/include/control.inc.php";
	include $arrFOLDER["dir_site"]."/include/funcao.inc.php";
	include $arrFOLDER["dir_site"]."/include/settings.inc.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Estatísticas</title>
	<link rel="stylesheet" type="text/css" href="css/ex15.css">
</head>
<body>
	<h1>Listagem de Estatísticas</h1>
	
	<?php
	 $quantidade = 10;

    $pagina     = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
 
    $inicio     = ($quantidade * $pagina) - $quantidade;
	$sql ="SELECT * FROM stats ORDER BY datahora DESC LIMIT $inicio, $quantidade";
	$dados =db_query($sql);
	if(count($dados)){
	echo "<table border=1>";
	foreach($dados as $key => $value){
	echo "<tr>";
	echo "<td>".$value["id"]."</td>".
	"<td>".$value["url"]."</td>".
	"<td>".$value["ip"]."</td>".
	"<td>".$value["session"]."</td>".
	"<td>".$value["datahora"]."</td>".
	"<td>".$value["id_user"]."</td>".
	"<td>".$value["admin"]."</td>";
	echo "</tr>";
	}
	echo "</table>"; 
}
  $sqlTotal   = "SELECT id FROM stats";
  $qrTotal    = db_query($sql);
  $numTotal   = mysqli_num_rows($sql,$qrTotal); //problema
  $totalPagina= ceil($numTotal/$quantidade);
   $exibir = 3;
   $anterior  = (($pagina - 1) == 0) ? 1 : $pagina - 1;
   $posterior = (($pagina+1) >= $totalPagina) ? $totalPagina : $pagina+1;
    ?>
    <div id="navegacao">
        <?php
        echo '<a href="?pagina=1">primeira</a> | ';
        echo "<a href=\"?pagina=$anterior\">anterior</a> | ";
    ?>
        <?php
   for($i = $pagina-$exibir; $i <= $pagina-1; $i++){
       if($i > 0)
        echo '<a href="?pagina='.$i.'"> '.$i.' </a>';
  }
  echo '<a href="?pagina='.$pagina.'"><strong>'.$pagina.'</strong></a>';

  for($i = $pagina+1; $i < $pagina+$exibir; $i++){
       if($i <= $totalPagina)
        echo '<a href="?pagina='.$i.'"> '.$i.' </a>';
  }
  ?>
    <?php echo " | <a href=\"?pagina=$posterior\">próxima</a> | ";
    echo "  <a href=\"?pagina=$totalPagina\">última</a>";
	?>
<a href='../../admin/'>
   <button>Voltar</button>
</a>
</body>
</html>
