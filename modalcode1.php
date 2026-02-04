<?php


require_once("conn/conn.php");
include_once ("gcu.php"); 
include_once ("ecode.php");
$tipoinst = 10;
if(!empty($_POST["resis"])){
	$id_user = $_SESSION['id_user'];
	$evecode = gerarCU();
	$valor=200;
	
			
				$result = "SELECT ideve COUNT FROM sorteioinstco WHERE id_user='$id_user' && tipoinst = '$tipoinst' ";
		$resultado = mysqli_query($conn, $result);
		$resulta1 = mysqli_num_rows($resultado);
				
		
		if(!empty($resulta1 < 1)){
				$resultados = gerarCodigoUnico();
						$resultado = $resultados;
				
	
			$result_usuario = "INSERT INTO sorteioinstco (id_user, key1, ideve, date, eve, tipoinst) VALUES ('$id_user','$valor', '$resultado', NOW(), '$evecode', '$tipoinst')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			
							
									
header("Location: vet200off.php");

			}else {
			$result = "SELECT ideve FROM sorteioinstco WHERE id_user='$id_user' && tipoinst = '$tipoinst' ORDER BY id DESC ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$resultat = $resulta['ideve']+1;
	
	
			$result_usuario = "INSERT INTO sorteioinstco (id_user, key1, ideve, date, eve, tipoinst) VALUES ('$id_user','$valor', '$resultat', NOW(), '$evecode', '$tipoinst')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
								
header("Location: vet200off.php");
						} 

	}	else {
		header("Location: vet100.php");
		
			}

?>
 					
