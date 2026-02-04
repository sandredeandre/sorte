



<!-- Selecção de sorteiados valores -->

<?php
require_once("conn/conn.php");
$result = "SELECT * FROM winbackup  WHERE tipo= 1 ORDER BY id DESC";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if (!empty($resulta)) {
 $id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
 $ideve  = $resulta ['ideve'];
 $eve = $resulta ['eve'];
 $key1 =$resulta ['key1'];

$result = "DELETE FROM winner  WHERE tipo = 1";
			$resultado_usuario = mysqli_query($conn, $result);


}


$result = "SELECT * FROM winbackup  WHERE tipo = 2 ORDER BY id DESC";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if (empty($resulta)) {
  $id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
 $ideve  = $resulta ['ideve'];
 $eve = $resulta ['eve'];
 $key1 =$resulta ['key1'];

$result = "DELETE FROM winner  WHERE tipo = 2";
			$resultado_usuario = mysqli_query($conn, $result);

}


$result = "SELECT * FROM winbackup  WHERE tipo = 3 ORDER BY id DESC";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);
if (!empty($resulta)) {
 $id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
 $ideve  = $resulta ['ideve'];
 $eve = $resulta ['eve'];
 $key1 =$resulta ['key1'];


$result = "DELETE FROM winner  WHERE tipo = 3";
			$resultado_usuario = mysqli_query($conn, $result);


}

$result = "SELECT * FROM winbackup  WHERE premio= 1 ORDER BY id DESC";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if (!empty($resulta)) {
 $id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
 $ideve  = $resulta ['ideve'];
 $eve = $resulta ['eve'];
 $key1 =$resulta ['key1'];

$result = "DELETE FROM winner  WHERE premio = 1";
			$resultado_usuario = mysqli_query($conn, $result);

} 


$result = "SELECT * FROM winbackup  WHERE premio = 2 ORDER BY id DESC";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if (empty($resulta)) {
  $id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
 $ideve  = $resulta ['ideve'];
 $eve = $resulta ['eve'];
 $key1 =$resulta ['key1'];

$result = "DELETE FROM winner  WHERE premio = 2";
			$resultado_usuario = mysqli_query($conn, $result);
} 

$result = "SELECT * FROM winbackup  WHERE premio = 3 ORDER BY id DESC";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);
if (!empty($resulta)) {
 $id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
 $ideve  = $resulta ['ideve'];
 $eve = $resulta ['eve'];
 $key1 =$resulta ['key1'];


$result = "DELETE FROM winner  WHERE premio = 3";
			$resultado_usuario = mysqli_query($conn, $result);

} 


		
?>

