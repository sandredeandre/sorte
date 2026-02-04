  <?php
 if(!empty($_POST["resis"])){
	$id_user = $_SESSION['id_user'];
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
 	$phone = base64_encode($phone);
			$result_usuario = "INSERT INTO sms (id_user, corpo) VALUES ('$id_user','$phone')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			$resulta = mysqli_fetch_assoc($resultado);
header ("location: index.php");
}
?>
