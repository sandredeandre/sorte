

<?php
require_once("conn/conn.php");

	
		$result = "SELECT id_user COUNT FROM sorteio WHERE  tipo =1 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if(!empty($resulta >2400 )){
	
	$result = "SELECT * FROM sorteio  WHERE tipo =1 BETWEEN 0 and 2400 LIMIT 1";
	$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
				$key1 = $resulta ['key1'];
$tipo = $resulta ['tipo'];
$premio = $resulta ['premio'];
$tipoinst =$resulta ['tipoinst'];

	$tel = $resulta ['phone'];
		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
	header("Location: win.php");
				
	}else {
		header("Location: index.php");
										} 
?>
 			
	

<?php


$result = "SELECT id_user COUNT FROM sorteio WHERE  tipo =2 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if(!empty($resulta >7000 )){
	
	$result = "SELECT * FROM sorteio  WHERE tipo =2 BETWEEN 0 and 7000 LIMIT 1";
	$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
				$key1 = $resulta ['key1'];
$tipo = $resulta ['tipo'];
$premio = $resulta ['premio'];
$tipoinst =$resulta ['tipoinst'];

		$tel = $resulta ['phone'];
		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
	header("Location: win.php");
				
	}else {
		header("Location: index.php");
										} 
?>
 			
			
<?php


$result = "SELECT id_user COUNT FROM sorteio WHERE  tipo =3 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if(!empty($resulta >70000 )){
	
	$result = "SELECT * FROM sorteio  WHERE tipo =3 BETWEEN 0 and 70000 LIMIT 1";
	$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
				$key1 = $resulta ['key1'];
$tipo = $resulta ['tipo'];
$premio = $resulta ['premio'];
$tipoinst =$resulta ['tipoinst'];

		$tel = $resulta ['phone'];
		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
	header("Location: win.php");
				
	}else {
		header("Location: index.php");
										} 
?>
 			
		

<?php
//produtos 

		
$result = "SELECT id_user COUNT FROM sorteiop WHERE premio  =1 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if(!empty($resulta >6000 )){
	
	$result = "SELECT * FROM sorteiop  WHERE premio =1 BETWEEN 0 and 6000 LIMIT 1";
	$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
				$key1 = $resulta ['key1'];
$tipo = $resulta ['tipo'];
$premio = $resulta ['premio'];
$tipoinst =$resulta ['tipoinst'];

		$tel = $resulta ['phone'];
		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
	header("Location: win.php");
				
	}else {
		header("Location: index.php");
										} 
?>
 			
	

<?php


		$result = "SELECT id_user COUNT FROM sorteiop WHERE premio  =2 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if(!empty($resulta >60000 )){
	
	$result = "SELECT * FROM sorteio  WHERE premio =2 BETWEEN 0 and 600000 LIMIT 1";
	$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
				$key1 = $resulta ['key1'];
$tipo = $resulta ['tipo'];
$premio = $resulta ['premio'];
$tipoinst = $resulta ['tipoinst'];
$tel = $resulta ['phone'];
		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
	header("Location: win.php");
				
	}else {
		header("Location: index.php");
										} 
?>
 			
			
<?php


		$result = "SELECT id_user COUNT FROM sorteiop WHERE premio  =3 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if(!empty($resulta >60000 )){
	
	$result = "SELECT * FROM sorteiop  WHERE premio =3 BETWEEN 0 and 600000 LIMIT 1";
	$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
				$key1 = $resulta ['key1'];
$tipo = $resulta ['tipo'];
$premio = $resulta ['premio'];
$tipoinst =$resulta ['tipoinst'];

	$tel = $resulta ['phone'];
		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
		
	header("Location: win.php");
				
	}else {
		header("Location: index.php");
										} 

// instantâneo 


?>
 <?php


		
$result = "SELECT id_user COUNT FROM sorteioinst WHERE tipoinst =1 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if(!empty($resulta >12 )){
	
	$result = "SELECT * FROM sorteioinst  WHERE tipoinst =1 BETWEEN 0 and 12 LIMIT 1";
	$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
				$key1 = $resulta ['key1'];
$tipo = $resulta ['tipo'];
$premio = $resulta ['premio'];
$tipoinst="1";
		$tel = $resulta ['phone'];
		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
	header("Location: vet100.php");
				
	}else {
		header("Location: vet100.php");
										} 
?>			
		 <?php
		$result = "SELECT id_user COUNT FROM sorteioinst WHERE tipoinst =2 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if(!empty($resulta >12 )){
	
	$result = "SELECT * FROM sorteioinst  WHERE tipoinst =2 BETWEEN 0 and 12 LIMIT 1";
	$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
				$key1 = $resulta ['key1'];
$tipo = $resulta ['tipo'];
$premio = $resulta ['premio'];
$tipoinst ="2";
	$tel = $resulta ['phone'];
		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
	header("Location: vet200.php");
				
	}else {
		header("Location: vet200.php");
										} 
?>				 <?php
		$result = "SELECT id_user COUNT FROM sorteioinst WHERE tipoinst =3 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if(!empty($resulta >12 )){
	
	$result = "SELECT * FROM sorteioinst  WHERE tipoinst =3 BETWEEN 0 and 12 LIMIT 1";
	$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
				$key1 = $resulta ['key1'];
$tipo = $resulta ['tipo'];
$premio = $resulta ['premio'];
$tipoinst ="3";
$tel = $resulta ['phone'];
		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
			
	header("Location: vet500.php");
				
	}else {
		header("Location: vet500.php");
										} 
?>		

		 <?php
		$result = "SELECT id_user COUNT FROM sorteioinst WHERE tipoinst =4 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if(!empty($resulta >12 )){
	
	$result = "SELECT * FROM sorteioinst  WHERE tipoinst =4 BETWEEN 0 and 12 LIMIT 1";
	$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
				$key1 = $resulta ['key1'];
$tipo = $resulta ['tipo'];
$premio = $resulta ['premio'];
$tipoinst ="4";
$tel = $resulta ['phone'];
		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
	header("Location: vet1m.php");
				
	}else {
		header("Location: vet1m.php");
										} 
?>		
		 <?php
		$result = "SELECT id_user COUNT FROM sorteioinst WHERE tipoinst =5 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if(!empty($resulta >12 )){
	$result = "SELECT * FROM sorteioinst  WHERE tipoinst =5 BETWEEN 0 and 12 LIMIT 1";
	$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
				$key1 = $resulta ['key1'];
$tipo = $resulta ['tipo'];
$premio = $resulta ['premio'];
$tipoinst ="5";
$tel = $resulta ['phone'];
		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
		header("Location: vet2m.php");
				
	}else {
		header("Location: vet2m.php");
										} 
?>		
		 <?php
		$result = "SELECT id_user COUNT FROM sorteioinst WHERE tipoinst =6 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if(!empty($resulta >12 )){
	
	$result = "SELECT * FROM sorteioinst  WHERE tipoinst =6 BETWEEN 0 and 12 LIMIT 1";
	$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
				$key1 = $resulta ['key1'];
$tipo = $resulta ['tipo'];
$premio = $resulta ['premio'];
$tipoinst ="6";
$tel = $resulta ['phone'];
		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
	header("Location: vet5m.php");
				
	}else {
		header("Location: vet5m.php");
										} 
?>		
		 <?php
		$result = "SELECT id_user COUNT FROM sorteioinst WHERE tipoinst =7 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if(!empty($resulta >3 )){
	
	$result = "SELECT * FROM sorteioinst  WHERE tipoinst =7 BETWEEN 0 and 3 LIMIT 1";
	$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
				$key1 = $resulta ['key1'];
$tipo = $resulta ['tipo'];
$premio = $resulta ['premio'];
$tipoinst ="7";
$tel = $resulta ['phone'];
		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
	header("Location: vet100m.php");
				
	}else {
		header("Location: vet100m.php");
										} 
?>		
	 <?php
		$result = "SELECT id_user COUNT FROM sorteioinst WHERE tipoinst =8 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if(!empty($resulta >3 )){
	
	
	$result = "SELECT * FROM sorteioinst  WHERE tipoinst =8 BETWEEN 0 and 3 LIMIT 1";
	$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve']; 
				$key1 = $resulta ['key1'];
$tipo = $resulta ['tipo'];
$premio = $resulta ['premio'];
$tipoinst ="8";
$tel = $resulta ['phone'];
		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst', '$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
	header("Location: vet1ml.php");
				
	}else {
		header("Location: vet1ml.php");
										} 
?>			 <?php
		$result = "SELECT id_user COUNT FROM sorteioinst WHERE tipoinst =9 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if(!empty($resulta >=3 )){
	
	
	$result = "SELECT * FROM sorteioinst  WHERE tipoinst =9 BETWEEN 0 and 3 LIMIT 1";
	$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
				$key1 = $resulta ['key1'];
$tipo = $resulta ['tipo'];
$premio = $resulta ['premio'];
$tipoinst = "9";
$tel = $resulta ['phone'];
		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, tipo, premio, tipoinst, phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst', '$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
	header("Location: vet50m.php");
				
	}else {
		header("Location: vet50m.php");
	#tipo 10 embaixo									
	} 
?>		
 <?php

 $id_use=$_SESSION['id_user'];
		$result = "SELECT id_user COUNT FROM sorteioinst WHERE tipoinst =10 && id_user='$id_use'";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if(!empty($resulta >=12 )){
	
	
	$result = "SELECT * FROM sorteioinst  WHERE tipoinst =10 && id_user='$id_use' BETWEEN 0 and 12 LIMIT 1 ";
	$resultado = mysqli_query($conn, $result);
		$resultaw = mysqli_fetch_assoc($resultado);
		$id_user  = $resultaw ['id_user'];
		$date  = $resultaw ['date'];
		$ideve  = $resultaw ['ideve'];
		$eve = $resultaw ['eve'];
				$key1 = $resultaw ['key1'];
$tipo = $resultaw ['tipo'];
$premio = $resultaw ['premio'];
$tipoinst = "10";
$tel = $resultaw ['phone'];

		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst', '$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
	header("Location: vet200off.php");
				
	}else {
		header("Location: vet200off.php");
										} 
?>		