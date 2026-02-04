 
     
	 
			              				 <?php
		 
$result = "SELECT * FROM sms  LEFT JOIN user ON
 (sms.id_user= user.id) WHERE sms.id_user = user.id  AND id_user = '$id_user' LIMIT 5 ";
  $resultado = mysqli_query($conn, $result);
 ?>

			<ul class="nav flex-column">
			<form  method="POST"  ajax="true">	
					  <?php
            while($resulta = mysqli_fetch_assoc($resultado)){ ?>
            	
				<li class="nav-item">
             <img width="30" class="rounded-circle img-thumbnail" src="img/<?php  echo $outro = base64_decode($resulta['img']);?>" ><?php echo $nome = base64_decode($resulta['nome']);?>   <?php  echo $outro = base64_decode($resulta['outronome']);?> <br>
 <i class="bi-chat" ></i>	<?php  echo $corpo =base64_decode($resulta['corpo']);?> 		
            </li>
		 	
				
            <?php } ?>
             
              
				
          </div>		
			

    
         
               </ul>
          
 			<form class="form-inline my-2 my-lg-0 " method="POST" action="salas1.php" ajax="true">	
			
				<input  class="form-check-inline-xl w-bolder  btn btn-info textarea" type="text" name="phone" >
			
			
				<input required  class="form-control-mt-auto fw-bolder  btn btn-dark text-center" type="submit" name="resis" value="ok">
				</form>
        
			


			
