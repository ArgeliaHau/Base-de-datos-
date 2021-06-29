<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calificacion</title>
	<script type="text/javascript">
		function confirmar(){
			return confirm('¿Estas Seguro?, Se eliminaran los datos');
		}
	</script>
	<link rel="stylesheet" href="Estilos.css">
</head>
<body>

<?php 
include("conexion.php");
//select * From materia 
$sql="select * From lista";
$resultado=mysqli_query($conexion, $sql);
 ?>

<h1>calificacion</h1>
<a href="Agregar.php">lista</a><br><br>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Materia</th>
			<th>Docente</th>
			<th>Promedio</th>
			<th>Acciones</th>
		</tr>
	</thead>
		<tbody>
			<?php 
             while ($filas=mysqli_fetch_assoc($resultado)) {   
			 ?>
	<tr>
		<td><?php echo $filas['ID'] ?> </td>
		<td><?php echo $filas['Materia'] ?></td>
		<td><?php echo $filas['Docente'] ?></td>
		<td><?php echo $filas['Promedio'] ?></td>
		<td>
			<?php echo "<a href='Editar.php?ID=".$filas['ID']."'>Editar";?>
			-
			<?php echo "<a href='Eliminar.php?ID=".$filas['ID']."' onclick='return confirmar()'>Eliminar</a> ";?>

		</td>
	</tr>
	<?php 
        }
	 ?>
		</tbody>
	
</table>
<?php 
   mysqli_close($conexion); 
 ?>
</body>
</html>