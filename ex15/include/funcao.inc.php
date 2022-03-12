<?php
function num_extenso($valor)
{
	$inteiro = new NumberFormatter("pt", NumberFormatter::SPELLOUT);
	$whole = (int)$valor;
	if ($whole != $valor)
	{	$fraction = ($valor - ((int)$valor));
		$fraction=round($fraction,2);
		$fraction = str_replace( '.', '', $fraction );
		$fraction = number_format( (float)$fraction,2);
	echo $inteiro->format($whole) . " euro(s) e ". $inteiro->format($fraction) . " cêntimo(s).";}
	else{echo $inteiro->format($valor). " euros.";}
}
function troco($valor)
{
	$mostrar="";
	for ($i=$valor ; $i>=0 ;$i--)
	{if($valor>=500)
	{
		$valor-=500;
		echo $mostrar=' <img src="ex14/imgs/500.jpg"> ';
	}	
	else if($valor>=200)
	{
		$valor-=200;
		echo $mostrar=' <img src="ex14/imgs/200.jpg"> ';
	}
	else if($valor>=100)
	{
		$valor-=100;
		echo $mostrar=' <img src="ex14/imgs/100.jpg"> ';
	}
	else if($valor>=50)
	{
		$valor-=50;
		echo $mostrar=' <img src="imgs/50.jpg"> ';
	}
	else if($valor>=20)
	{
		$valor-=20;
		echo $mostrar=' <img src="ex14/imgs/20.jpg"> ';
	}
	else if($valor>=10)
	{
		$valor-=10;
		echo $mostrar=' <img src="ex14/imgs/10.jpg"> ';
	}	
	else if($valor>=5)
	{
		$valor-=5;
		echo $mostrar=' <img src="ex14/imgs/5.jpg"> ';
	}
	else if($valor>=2)
	{
		$valor-=2;
		echo $mostrar=' <img src="ex14/imgs/2.jpg"> ';
	}
	else if($valor>=1)
	{
		$valor-=1;
		echo $mostrar=' <img src="ex14/imgs/1.jpg"> ';
	}
	else if($valor>=0.5)
	{
		$valor-=0.5;
		echo $mostrar=' <img src="ex14/imgs/50cent.jpg"> ';
	}
	else if($valor>=0.2)
	{
		$valor-=0.2;
		echo $mostrar=' <img src="ex14/imgs/20cent.jpg"> ';
	}
	else if($valor>=0.1)
	{
		$valor-=0.1;
		echo $mostrar=' <img src="ex14/imgs/10cent.jpg"> ';
	}
	else if($valor>=0.05)
	{
		$valor-=0.05;
		echo $mostrar=' <img src="ex14/imgs/5cent.jpg"> ';
	}
	else if($valor>=0.02)
	{
		$valor-=0.02;
		echo $mostrar=' <img src="ex14/imgs/2cent.jpg"> ';
	}
	else if($valor>=0.01)
	{
		$valor-=0.01;
		echo $mostrar=' <img src="ex14/imgs/1cent.jpg"> ';
	}
	}
}
function db_connect()
{
	global $arrSETTINGS;
	$conn=new mysqli($arrSETTINGS["hostname"], $arrSETTINGS["username"], $arrSETTINGS["password"], $arrSETTINGS["database"]);
	if($conn -> connect_error){
		die("Conexão falhou:" . $conn -> connect_error);
	}
	$conn ->set_charset("utf8");
	return $conn;
}
function db_query($sql)
{
	global $arrSETTINGS;
	$result = $arrSETTINGS["db_connect"]->query($sql);
	if($result===TRUE){
		return true;
	}
	elseif(isset($result->num_rows)){
		$arrResult=array();
		while($row = $result->fetch_assoc())
			{$arrResult[]=$row;}
		return $arrResult;
	}else{
		if($arrSETTINGS["error_flag"]){
			die("Erro: " . $sql . "<br>" . $arrSETTINGS["db_connect"] ->error);
		}

	}	
}
function db_close()
{
	global $arrSETTINGS;
	$arrSETTINGS["db_connect"] ->close();
}
function pr($arr)
{
	echo"<pre>";
	print_r($arr);
	echo "</pre>";
}
?>
