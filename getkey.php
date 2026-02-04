<?php		
 
include_once ("header.php");  
include_once ("menu.php");  
 include_once ("vermenu.php");  
include_once ("gcu.php"); 
	?>
	
	<?php if (!empty($_SESSION['usuarioNiveisAcessoId'] == "3")){
		
		 
			$result = "SELECT id_user COUNT FROM sorteio WHERE  key1 = 200 ";
		$resultado = mysqli_query($conn, $result);
		$resulta1 = mysqli_num_rows($resultado);
				
		
		if(!empty($resulta1 <= 2400 )){
		?>
		
		 Não é possivel gerar novo codigo, pois ainda não terminou <br> sessão do codigo anterior <br><br>
		
		<?php
				}
					else {
						$resultados = gerarCodigoUnico();
						$resultado = "200".$resultados."200";
						echo "Foi inserido o a baixo<br> $resultado<br>";
						$resultado = $resultados;
					$result_usuario = "UPDATE sorteio SET ideve =  '$resultado'  WHERE sorteio.ideve = ideve AND sorteio.key1 = 200 ";
									$resultado_usuario = mysqli_query($conn, $result_usuario);
					
					
									
					}
		}
	
		if (!empty($_SESSION['usuarioNiveisAcessoId'] == "3")){
		
		 
			$result = "SELECT id_user COUNT FROM sorteio WHERE  key1 = 1000 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
		
		if(!empty($resulta <= 2400)){
		?>
		
		 Não é possivel gerar novo codigo, pois ainda não terminou <br> sessão do codigo anterior <br><br>
		
		<?php
				}
					else {
						 $resultados = gerarCodigoUnico();
						$resultado = base64_encode($resultados);
						echo "Foi inserido o a baixo<br> $resultado<br>";
				$result_usuario = "UPDATE sorteio SET ideve =  '$resultado'  WHERE sorteio.ideve = ideve AND sorteio.key1 = 1000 ";
									$resultado_usuario = mysqli_query($conn, $result_usuario);
					
				 
					}
		}
	
		
		if (!empty($_SESSION['usuarioNiveisAcessoId'] == "3")){
		
		 
			$result = "SELECT id_user COUNT FROM sorteio WHERE  key1 = 1000 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
		
		if(!empty($resulta <= 2400)){
		?>
		
		 Não é possivel gerar novo codigo, pois ainda não terminou <br> sessão do codigo anterior 
		
		<?php
				}
					else {
						$resultados = gerarCodigoUnico();
						$resultado = base64_encode($resultados);
						echo "Foi inserido o a baixo<br> $resultado<br>";
									
					$result_usuario = "UPDATE sorteio SET ideve =  '$resultado'  WHERE sorteio.ideve = ideve AND sorteio.key1 = 10000 ";
									$resultado_usuario = mysqli_query($conn, $result_usuario);
								
					}
		}
	
	?>	
		
