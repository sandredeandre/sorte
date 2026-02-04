<div class="dropdown-header">
<div class="text-center">
				<strong class="text-muted"> 
		<div  class="text-bolder">
	<?php
	
$id_user = $_SESSION['id_user'];
$result = "SELECT * FROM user WHERE  id = '$id_user' ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		if(!empty($resulta)){ 	
			?>


		<img 
class=" img-thumbnail rounded-circle" src="../img/<?php echo $img = base64_decode($resulta['img']);?>"width="64" height="64" >

  <?php 
}else{?>
<img 
class=" img-thumbnail rounded-circle" src="../img/logo.PNG"width="64" height="64" ><br>
<small class="text-muted">
	<h5 class="display-4">
Para um futuro prospero
</h5></small>
<?php }

?>

 </strong>
			
</div></div></div>