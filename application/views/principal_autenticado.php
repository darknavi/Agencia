<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>inicio_bienvenida</title>
	
</head>

<body>

	<a href='salir'>salir</a>
	<h2>perfil de:
	<? echo $_SESSION['nombreocorreo'] ?>
	</h2>
	
	<br>

   <h3>
   <a href='modificar'>Modificar perfil</a>
	</h3>


</body>
</html>
