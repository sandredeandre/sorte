                 
			<span  style="top:12; left:70%;"

 class="fixed-top small text-muted display-4 strong fw-bold"
	>
  <?php 
 
if(isset($_SESSION["id_user"])){
$id_user = $_SESSION['id_user'];
 $result = "SELECT * FROM user WHERE id='$id_user' ";
 $resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);
?>

  <?php
echo $resulta["code"];?>
	<br><?php 
echo $nome=base64_decode ($resulta["nome"]);?>  <?php 
echo $bsse = base64_decode($resulta["outronome"]); ?> 
<?php
}else{?>Vida Próspera<?php } ?>
</span>