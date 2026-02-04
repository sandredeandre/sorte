


<?php 
if (!empty($_GET['id2add'])){
$id2add =base64_decode($_GET['id2add']);
$result = " SELECT * FROM produtos WHERE finalidd = 1 && id = '$id2add' LIMIT 1"; 
$resultado = mysqli_query ($conn, $result);
$resultta = mysqli_fetch_assoc($resultado);
 $id_produto = $resultta['id'];
  $id_prod = $id_produto;
$id_user = $_SESSION['id_user']; 
 $keyyy = $resultta['key1'];
 $lims =base64_decode($resultta['limit']);

		$pchave = $resultta['pchave'];
		$img = $resultta['img'];
		
		$eve = $resultta['eve'];
$ideve = $resultta['ideve'];
$modelo= $resultta['modelo'];
$prodtipo = $resultta['prodtipo'];

	if (!empty($keyyy){
$result = "SELECT * FROM saldo WHERE id_user = '$id_user'  ";
		$resultado = mysqli_query($conn, $result);
		$resultas = mysqli_fetch_assoc($resultado);
		$saldofinal=base64_decode($resultas['saldofinal']);
 $keyyy = base64_decode($key1);
if (!empty($saldofinal >= '$keyyy')){
	
	$result = "SELECT id_user COUNT FROM sorteiop WHERE  id_prod = '$id_prod' && modelo = '$modelo' && eve = '$eve' && prodtipo ='$prodtipo' &&  pchave ='$pchave' ";
		$resultado = mysqli_query($conn, $result);
		$resulta1 = mysqli_num_rows($resultado); 
	
	
if ($resulta1 <= $lims){
 
				$result = "SELECT ideve COUNT FROM sorteiop WHERE   id = '$id_prod' && modelo = '$modelo' && eve = '$eve' && prodtipo ='$prodtipo' &&  pchave ='$pchave'";
		$resultado = mysqli_query($conn, $result);
		$resulta1 = mysqli_num_rows($resultado);
		
		if(!empty($resulta1 >=1)){
			
$result = " SELECT * FROM produtos WHERE finalidd = 1 && id = '$id2add' LIMIT 1"; 
$resultado = mysqli_query ($conn, $result);
$resultta = mysqli_fetch_assoc($resultado);
		$prodtipo = $resultta['prodtipo'];
		$key1 = $resultta['key1'];
		
$datai = $resultta['datai'];
		$dataf = $resultta['dataf'];
		$limit = $resultta['limit'];
		$pchave = $resultta['pchave'];
		$estado = 1;
		$img =$resultta['img'];
		$id_user = $_SESSION['id_user'];
		$eve = $resultta['eve'];
		$ideve = $resultta['ideve'] + 1;	
 $modelo = $resultta['modelo'];
 $prodtipo = $resultta['prodtipo'];
$chave = $resultta['pchave'];
 
			$result_usuario = "INSERT INTO sorteiop (id_prod, id_user, ideve, pchave, key1, prodtipo  datai, img, dataf, eve, limit, estado, modelo)
 VALUES ('$id2add', '$id_user','$ideve', '$pchave','$key1', '$prodtipo', '$datai', '$img', '$dataf', '$eve','$limit','$estado','$modelo')";
$resultado_usuario = mysqli_query($conn, $result_usuario);
			
						$sal=$saldofinal-$ykey1;
						$ykey11=base64_encode($sal);
									$result_usuario = "UPDATE saldo SET saldofinal =   '$ykey11' WHERE saldo . id_user = '$id_user' ";
									$resultado_usuario = mysqli_query($conn, $result_usuario);
									$resulta = mysqli_fetch_assoc($resultado);
									
									
header("Location: ../index.php");

			}else {
		$prodtipo = base64_encode($resultta['prodtipo']);
		$key1 = base64_encode($resultta['key1']);
		$datai = base64_encode($resultta['datai']);
		$dataf = base64_encode($resultta['dataf']);
		$limit = base64_encode($resultta['limit']);
		$pchave = base64_encode($resultta['pchave']);
		$estado = 1;
		$img =base64_encode($resultta['img']);
		$id_user = $_SESSION['id_user'];
		$eve = $resultta['eve'];
		$eve = base64_encode($eve);
		$ideve = $resultta['ideve'] + 1;	
	$ideve = base64_encode($ideve);
 $modelo = base64_encode($resultta['modelo']);
 $prodtipo = base64_encode($resultta['prodtipo']);
$chave = base64_encode($resultta['pchave']);

	$result_usuario = "INSERT INTO sorteiop (id_prod, id_user, ideve, pchave, key1, prodtipo  datai, img, dataf, eve, limit, estado, modelo)
 VALUES ('$id2add', '$id_user','$ideve', '$pchave','$key1', '$prodtipo', '$datai', '$img', '$dataf', '$eve','$limit','$estado','$modelo')";
$resultado_usuario = mysqli_query($conn, $result_usuario);
								$sal=$saldofinal-$ykey1;
						$ykey21=base64_encode($sal);													
									$result_usuario = "UPDATE saldo SET saldofinal =  '$keyt21' WHERE saldo . id_user = '$id_user' ";
									$resultado_usuario = mysqli_query($conn, $result_usuario);
									$resulta = mysqli_fetch_assoc($resultado);
header("Location: ../index.php");
						} 
			
			
			
				} else {
		header ("Location: pwinnep.php"); 
						} 
		
		
		

} 	else {
		header ("Location: ../erro2.php"); 
		
			}else{
				echo "Não é possivel continuar";
				}
		
		
}
		
		
		
		
		
		
		
	?>