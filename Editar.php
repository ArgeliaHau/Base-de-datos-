<?php 
 include("conexion.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar</title>
   <link rel="stylesheet" href="Estilos.css">
</head>
<body>
	<?php 
     if (isset($_POST['Enviar'])) {
     	//aqui si sirve el boton de enviar
     	$ID=$_POST['ID'];
     	$Materia=$_POST['Nombre'];
     	$Docente=$_POST['Apellidos'];
     	$Promedio=$_POST['Edad'];

     	//update amigos set ID=$ID, Nombre=$Nombre, Apellidos=$Apellidos, Edad=$Edad where ID=$ID
     	$sql="update lista set ID='".$ID."', Materia='".$Materia."', Docente='".$Docente."', Promedio='".$Promedio."' where ID='".$ID."'";
     	$resultado=mysqli_query($conexion, $sql);

     	if ($resultado) {
     		echo "<script language='JavaScript'> alert('Los datos se actualizaron correctamente');
		location.assign('index.php');
		</script>";
     	}else{
     		echo "<script language='JavaScript'> alert('Los datos no se actualizaron correctamente');
		location.assign('index.php');
		</script>";

     	}
     	mysqli_close($conexion);

     }else{ 
        $ID=$_GET['ID'];
        $sql="Select * from lista  Where ID='".$ID."'";
        $resultado=mysqli_query($conexion, $sql);

        $fila=mysqli_fetch_assoc($resultado);
        $ID=$fila["ID"];
        $Materia=$fila["Materia"];
        $Docente=$fila["Docente"];
        $Promedio=$fila["Promedio"];

        mysqli_close($conexion);
	 ?>
<h1>Editar lista</h1>
<form action="<?=$_SERVER['PHP_SELF']  ?>" method="post">
	<label>ID:</label><br>
	 <input type="text"  name="ID" placeholder="ID" value="<?php echo $ID; ?>"><br>
	 <label>Nombre:</label><br>
     <input type="text"  name="Materia" placeholder="Materia" value="<?php echo $Materia; ?>"><br>
     <label>Docente: </label><br>
     <input type="text"  name="Docente" placeholder="Docente" value="<?php echo $Docente; ?>"><br>
     <label>Promedio: </label><br>
     <input type="text"  name="Promedio" placeholder="Promedio" value="<?php echo $Promedio; ?>"><br>

     <input type="hidden" name="id" value="<?php echo $id;  ?>">

     <input type="submit" name="Enviar" value="ACTUALIZAR">
     <a href="index.php">Regresar</a>
</form>
<?php 
}
 ?>
</body>
</html>