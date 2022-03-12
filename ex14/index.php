<!DOCTYPE html>
<html>
<head>
	<title>Troco</title>
	<link rel="stylesheet" type="text/css" href="css/ex14.css">
</head>
<body>
<form action="resultado.php" method="POST" onchange="trocos()">
	Dívida<input type="text" id= divi name="divida" > <br>
	Pago<input type="text" id= pag name="pago" > <br>
	Troco<input type="text" id= troc name="troco"  readonly onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46'> <br>
	<input type="submit" name="mostrar">
</form>
<script type="text/javascript">
	function trocos()
	{
var d= document.getElementById('divi').value;
var p= document.getElementById('pag').value;
var t= document.getElementById('troc').value;
t=d-p;
return document.getElementById('troc').value=t;
	}
</script>
</body>
</html>