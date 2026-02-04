
<?php
require("conn/conn.php");
if((!empty($_POST['leve']))){	


$pvalor = filter_input(INPUT_POST, 'pvalor', FILTER_SANITIZE_STRING);
 $id_user = $_SESSION['id_user'] ;
		$result_usuario = "SELECT saldofinal FROM saldo WHERE id_user = '$id_user'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		$resultado=base64_decode($resultado);
			if(!empty($resultado)){
				
	$saldofinal = $resultado;

				if ($saldofinal >= $pvalor){
					$pvalor = base64_encode($pvalor);
					
					
					$result_usuario = "INSERT INTO lev (id_user, lvt) VALUES ('$id_user','$pvalor')";
						$resultado_usuario = mysqli_query($conn, $result_usuario);
					
						header("Location: index.php");
							 }
 		
		} else {
		
			header("Location: erro.php");
		}	
	}else {
		
			header("Location: erro2.php");
		}
	
	
