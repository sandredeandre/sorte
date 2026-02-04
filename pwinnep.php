

<?php
require_once("conn/conn.php");
	
$id2add=$_POST['id2add'];
		$result = "SELECT * FROM sorteiop WHERE id_prod = '$id2add' ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$limit=$resulta["limit"];
if(!empty($resulta )){
	
	$result = "SELECT id_user, date, ideve, eve, key1, id_prod FROM sorteiop  WHERE id_prod = '$id2add' BETWEEN 1 and '$limit' LIMIT 1";
	 
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
		$key1 = $resulta ['key1'];
		$id_prod= $resulta ['id_prod'];
		 $_SESSION['id_prod'] = $id_prod;
		

		$result_usuario = "INSERT INTO winner (id_user, date, ideve, eve, key1, id_prod) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1','$id_prod')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			
			
				
		
	header("Location: winp.php");
		
					
	}else {
	
		header("Location: index.php");
		
	
		
										} 
								
?>
 			
		
