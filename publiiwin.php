
				   

<?php
include_once ("header.php");  

if(isset($_SESSION['id_user'])){
	
include ("menu.php");
}else{
include_once ("blog.php");
}
?>
  <?php
include ("vermenu.php");
include ("main.php");
?>

	<div class="dropdown-divider"></div>
	<h6 class"text-center"> Ultimos sorteiados</h6>
		<div class="dropdown-divider"></div>
			              				 <?php
		$id_user = $_SESSION['id_user'];
		
$result = "SELECT * FROM winbackup LEFT JOIN user ON
 (winbackup.id_user= user.id) WHERE winbackup.id_user = user.id  LIMIT  4";
  $resultado = mysqli_query($conn, $result);
 
?>		<div class="text-center">
			
			<ul class="nav flex-column">
			<form  method="POST"  ajax="true">	
					  <?php
            while($resulta = mysqli_fetch_assoc($resultado)){ ?>
            	
				<li class="nav-item">
				<div class="row">
				<div class="col-2">
             <img width="30" class="rounded-circle img-thumbnail" src="img/<?php  echo $idd=base64_decode($resulta['img']);?> " >
			 </div>
			 <div class="col-2">
			 <?php echo $iiin = base64_decode($resulta['nome']);?>   <?php  echo $um=base64_decode($resulta['outronome']);?> 
 		
           
			</div>
			 <div class="col-2">
			<?php  echo $key = base64_decode($resulta['key1']);?> 
			 </div>
			  <div class="col-3">
			 	<?php  if ($resulta['id_user'] == $id_user){ ?><i class="bi bi-emoji-laughing-fill" ></i>
You Win 		 <?php }else {?> <i class="bi bi-emoji-expressionless-fill" ></i>You Lost	<?php } ?> 
			 </div>
			 </div>
			  <hr>
			 </li>
		 	
				
            <?php } ?>
             
            
               </ul>
     
	 </div>
	<div class="dropdown-divider"></div>
	<h6 class="text-center"> Contas</h6>
			<div class="dropdown-divider"></div>

			              				 <?php
		$id_user = $_SESSION['id_user'];
		$result = "SELECT id_user COUNT FROM payinfo WHERE  '$id_user'";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
		
		if ($resulta >= 1){
		
$result = "SELECT * FROM payinfo   WHERE id_user = '$id_user' LIMIT 1 ";
  $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);
?>		<div class="text-center">
			
			<ul class="nav flex-column">
			
			
				<li class="nav-item">
				<div class="row">
				
			<div class="col-3">
			<h5 class="text-bolder">Banco: <?php  echo $banco = base64_decode($resulta['Banco']);?> </h5>
			 </div>	
			 <div class="col-3">
			<h5 class="text-bolder">Conta:  <?php echo $conta = base64_decode($resulta['conta']);?> </h5> 
 		
			</div>
			 <div class="col-3">
			<h5 class="text-bolder">Iban:   <?php  echo $iban = base64_decode($resulta['iban']);?> </h5>
 		
			
			</div>
			  <div class="col-3">
			 	<i class="bi bi-emoji-heart-eyes-fill" ></i>  </div>
		 <?php }else {?><h4 class="alert-danger "> <i class="bi bi-emoji-expressionless-fill" ></i> Sem Conta. Criar Agora </h4>
			<form class="form-inline my-2 my-lg-0 " method="POST"  ajax="true">	
			
         
 
  <?php
 if(!empty($_POST["resistir"])){
	$id_user = $_SESSION['id_user'];
$Banco = filter_input(INPUT_POST, 'Banco', FILTER_SANITIZE_STRING);
$conta = filter_input(INPUT_POST, 'conta', FILTER_SANITIZE_STRING);
$iban = filter_input(INPUT_POST, 'iban', FILTER_SANITIZE_STRING);
 	$Banco = base64_encode($Banco);
 	$conta = base64_encode($conta);
 	$iban = base64_encode($iban);
			$result_usuario = "INSERT INTO payinfo (id_user, Banco, conta, iban) VALUES ('$id_user','$Banco','$conta' ,'$iban')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			$resulta = mysqli_fetch_assoc($resultado);
}
?>
     
		 
	
             
              
				<input rows="5" class="form-check-inline-ms w-bolder  btn btn-info textarea" type="text" name="Banco" value="Banco"> 
				<input rows="5" class="form-check-inline-ms w-bolder  btn btn-info textarea" type="text" name="conta" value="Conta"> 	
				<input rows="5" class="form-check-inline-ms w-bolder  btn btn-info textarea" type="text" name="iban" value="IBAN"> 
			
				<input required  class="form-control-mt-auto fw-bolder  btn btn-dark text-center" type="submit" name="resistir" value="ok">
				</form>


		 <?php } ?> 
			 </div>
			 </div>
			  <hr>
			 </li>
		 	
				
         
             
            
               </ul>
     
	 </div>	

<div class="text-center">
				<div class="dropdown-divider"></div>
   	<h6> Levantamentos</h6>
			<div class="dropdown-divider"></div>
			              				 <?php
		$id_user = $_SESSION['id_user'];
$result = "SELECT * FROM lev  WHERE id_user = '$id_user' LIMIT 5";
  $resultado = mysqli_query($conn, $result);
 
?>		
			<ul class="nav flex-column">
			<form  method="POST"  ajax="true">	
					  <?php
            while($resulta = mysqli_fetch_assoc($resultado)){ ?>
            	<div class="text-center">
				<li class="nav-item">
				<div class="row">
				 <div class="col-2">
			
			</div>
			
				<div class="col-2">
            Confirmar:  <?php  echo $confi = base64_decode($resulta['conf']);?><i class="bi bi-emoji-heart-eyes" ></i>  
			 </div>
			 <div class="col-2">
			 A Levantar:  <?php echo $lvt = base64_decode($resulta['lvt']);?>   		
           
			</div>
			
			  
			 </div></div>
			  <hr>
			 </li>
		 	
				
            <?php } ?>
             
            
               </ul>
     
	 </div>
  
     
	<?php
include_once ("sort.php");
include_once ("copy.php");

?>
