<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar</title>
	<link rel="stylesheet" href="Estilos.css">
</head>
<body>
<?php 
if (isset($_POST['Enviar'])) {
	$Materia=$_POST['Materia'];
	$Docente=$_POST['Docente'];
	$Promedio=$_POST['Promedio'];

	include("conexion.php");
	//insert into amigos(ID, Nombre, Apellidos, Edad)
	//values($ID, $Nombre, $Apellidos, $Edad);
	$sql="insert into materias(Materia, Promedio, Prodente) Values('".$Materia."', '".$Docente."', '".$Promedio."') ";

	$resultado=mysqli_query($conexion, $sql);

	if($resultado){
		//Los datos Ingresaron a la bd
		echo "<script language='JavaScript'> alert('Los datos fueron ingresados correctamente a la BD');
		location.assign('index.php');
		</script>";
	}else{
		echo "<script language='JavaScript'> alert('ERROR: Los datos no fueron ingresados  a la BD');
		location.assign('index.php');
		</script>";
	}
	mysqli_close($conexion);

}else{
 ?>

<h1>Agregar Nueva Materia</h1>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post"><br>
     <label>ID</label><br>
    <input type="text"  name="ID" placeholder="ID"><br>
<label>Nombre:</label><br>
    <input type="text"  name="Materia" placeholder="Materia"><br>
<label>Apellidos:</label><br>
    <input type="text"  name="Docente" placeholder="Docente"><br>
<label>Edad: </label><br>
    <input type="text"  name="Promedio" placeholder="Promedio"><br>

	<input type="submit" name="Enviar" value="Agregar">
	<a href="index.php">Regresar</a>
</form>
<?php 
}
 ?>
</body>
</html>