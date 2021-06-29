<?php 
    $ID=$_GET['ID'];
    include("conexion.php");

    //delete from amigos where ID=$ID
    $sql="delete from lista where ID='".$ID."'";
    $resultado=mysqli_query($conexion, $sql);


if ($resultado) {
	echo "<script language='JavaScript'> alert('Los datos se eliminaron correctamente de la BD');
		location.assign('index.php');
		</script>";
}else{
	echo "<script language='JavaScript'> alert('Los datos no se eliminaron de la BD    ');
		location.assign('index.php');
		</script>";
}
 ?>}
