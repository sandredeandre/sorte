	<?php
	
require("conn/conn.php");
if (isset($_SESSION['id_user'])){

	$id_user = $_SESSION['id_user'];
	
		$result = "SELECT * FROM saldo WHERE id_user = '$id_user'";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		
if (isset($resulta)){
		
	header("Location: index.php");
	} else {
		$id_user = $_SESSION['id_user'];
		$Valor = 0;
			$Valor = base64_encode($Valor);
		$cfile = "0";
			$cfile = base64_encode($cfile);
		$cvalor = 0;
			$cvalor = base64_encode($cvalor);
		$saldofinal = 0;
			$saldofinal = base64_encode($saldofinal);
		$result= "INSERT INTO saldo (id_user, Valor, cfile, cvalor, saldofinal) VALUES ('$id_user', '$Valor',' '$cfile', '$cvalor','$saldofinal')";
$resultado_usuario = mysqli_query($conn, $result);
		
	header("Location: index.php");
						}	
}else{ 
	include("blog.php");	
							
echo "<br>";
echo "<br>";
				include("retr.php");		
}

?>
