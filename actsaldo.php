
	<?php
	if(isset($_SESSION['id_user'])){
		if(isset($_POST['confi'])){
			$id_user=$POST['id_user'];
			$result = "SELECT * FROM saldo WHERE id_user = '$id_user' LIMIT 1";
		$resultados = mysqli_query($conn, $result);
		$resultado = mysqli_fetch_assoc($resultados);
	
		if (isset($resultado)){
$valor = base64_decode($resultado['Valor']);
$saldofinal= base64_decode($resultado['saldofinal']);
$totalvalor= $valor + $saldofinal;
$totalvalor=base64_encode($totalvalor);
$id_user = $resultado['id_user'];


									$result = "UPDATE saldo SET saldofinal =  '$totalvalor' WHERE saldo . id_user = '$id_user' ";
									$resultado = mysqli_query($conn, $result);
					}			
			
				}
}else{ 
	include("blog.php");	
						
echo "<br>";
echo "<br>";
				include("retr.php");		
}
?>
				
				
			
