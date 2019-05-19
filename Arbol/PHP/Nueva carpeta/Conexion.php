<!DOCTYPE html>
<html>
<head>
	<title>Tabla</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="Efecto.css">
</head>
<body>
	<img src="fondo.JPG">

	<form  name="formu" method="get" action="base.html">
	<?php
	//se empieza por declarar las variables
	$db_host="sql112.mipropia.com";
	$db_nombre="mipc_22043387_bd_comentario";
	$db_usuario="mipc_22043387";
	$db_contra="elcompadegoretti";

    $nombre=$_GET["nom"];
    $telefono=$_GET["tel"];
    $email=$_GET["correo"];
    $sugerencia=$_GET["suge"];


//se conecta con el gestor de base de datos en este caso Mysql y se pasa por un filtro para ver los errores
$conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
if (mysqli_connect_errno()) {
		echo "Fallo la conexion el Gestor de Base de Datos";
		exit();
	}
//Se conecta y verifica la conexion con la Base de Datos
	mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BASE DE DATOS");
		mysqli_set_charset($conexion, "utf8");
//Se ingresan los datos en las tablas y base de datos

			$consulta="INSERT INTO datos (Nombre, Telefono, E_mail, Sugerencia) 
			VALUES ('$nombre', '$telefono', '$email', '$sugerencia')";
// Se checa que los datos se hayan almacenado correctamente y manda el mensaje*/
	$resultados=mysqli_query($conexion, $consulta);
	if ($resultados==false) {
		print("<p>Los Administradores estan dando soporte, vuelve mas tarde</p>") ;
	}else {
		print("<p>Su cometario nos ha llegado, GRACIAS</p>") ;
	}

//Se cierra el codigo y manda mensaje si el registro fue un exito
	?>
	</form>
	<br><br>
	<form  name="formu2" method="" action="https://papeleria10mayo.mipropia.com/">
		<input type="submit" id="Regresar"  name="Regresar" value="Regresar">
		
	</form>

</body>
</html>