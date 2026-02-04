
				   

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
     	
			              				 <?php
		 
$result = "SELECT * FROM sms  LEFT JOIN user ON
 (sms.id_user= user.id) WHERE sms.id_user = user.id  ";
  $resultado = mysqli_query($conn, $result);
 
?>		<div class="text-center">
			
			<ul class="nav flex-column">
			<form  method="POST" action="" ajax="true">	
					  <?php
            while($resulta = mysqli_fetch_assoc($resultado)){ ?>
            	
				<li class="nav-item">
				<div class="row">
				<div class="col-2">
             <img width="30" class="rounded-circle img-thumbnail" src="img/ <?php echo $img = base64_decode($resulta['img']);?>" >
			 </div>
			 <div class="col-2">
			 <?php echo $mn = base64_decode($resulta['nome']);?>   <?php  echo $mm = base64_decode($resulta['outronome']);?> 
 		
           
			</div>
			 <div class="col-2">
			 <i class="bi bi-bi bi-chat" ></i>	<?php  echo $copro = base64_decode($resulta['corpo']);?> 
			 </div>
			  <div class="col-2">
			 	<?php  if ($resulta['situacoe_id'] == 1){ ?><i class="bi bi-brightness-high" ></i>
Online 		 <?php }else {?> <i class="bi bi-brightness-low" ></i>offline	<?php } ?> 
			 </div>
			 </div>
			  <hr>
			 </li>
		 	
				
            <?php } ?>
             
              
				
        	
			

    
         
               </ul>
          
 			<form class="form-inline my-2 my-lg-0 " method="POST" action="" ajax="true">	
			
         
 
  <?php
 if(!empty($_POST["resis"] or $_POST["phone"])){
	$id_user = $_SESSION['id_user'];
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$phone =base64_encode($phone);
			$result_usuario = "INSERT INTO sms (id_user, corpo) VALUES ('$id_user','$phone')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			
}
?>
     
		 
	
             
              
				<textarea rows="5" class="form-check-inline-ms w-bolder  btn btn-info textarea" type="text" name="phone" ></textarea>  
			
			
				<input required  class="form-control-mt-auto fw-bolder  btn btn-dark text-center" type="submit" name="resis" value="ok">
				</form>
        
	 </div>
	<br> <br>
	<?php
include_once ("sort.php");
include_once ("copy.php");

?>
