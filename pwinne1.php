

<?php
require_once("conn/conn.php");
	
	
		$result = "SELECT * FROM sorteio  WHERE primio = 1000000";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		
if(!empty($resulta )){
	
	$result = "SELECT id_user, date, ideve, eve, key1  FROM sorteio  WHERE premio = 1000000 BETWEEN 1 and 8000 LIMIT 1";
	
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
		$key1 = $resulta ['key1'];

		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			$resulta = mysqli_fetch_assoc($resultado);
			
				
		
	header("Location: win1.php");
		
					
	}else {
		
		header("Location: index.php");
		
	
		
										} 
								
?>
 			
	
