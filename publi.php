
				   

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
     		<form class="form-inline my-2 my-lg-0 " method="POST" action="" ajax="true">	
			
         
 
  <?php
 if(!empty($_POST["resis"] or $_POST["phone"])){
	$id_user = $_SESSION['id_user'];
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
 	$phone = base64_encode($phone);
			$result_usuario = "INSERT INTO feed (id_user, corpo) VALUES ('$id_user','$phone')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			
}
?>
               
				<textarea col="11" class="form-check-inline-ms w-bolder  btn btn-info" type="textarea" name="phone" ></textarea>
			
			
				<input required  class="form-control-mt-auto fw-bolder  btn btn-dark text-center" type="submit" name="resis" value="ok">
				</form>
		
	 			              				 <?php
		 
$result = "SELECT * FROM feed  LEFT JOIN user ON
 (feed.id_user= user.id) WHERE feed.id_user = user.id   ORDER BY feed.id ASC LIMIT 10";
  $resultado = mysqli_query($conn, $result);
 
?>	
			  
			<ul class="nav flex-column">
			<form  method="POST"  action="" ajax="true">	
					  <?php
            while($resulta = mysqli_fetch_assoc($resultado)){ ?>
            	
				<li class="nav-item">
				<div class="row">
				<div class="col-2 col-sm-2">
             <img width="80" height="80" class="rounded-circle img-thumbnail" src="img/logo.PNG" ></div><div class="col-2 col-sm-2"><h6  class=" fw-bolder" ><?php echo $dd=base64_decode($resulta['nome']);?>   <?php  echo $de=base64_decode($resulta['outronome']);?></h6><i class="bi bi-bi bi-chat" ></i>	 
 
			 </div>
 <div   class="col-4">
 <?php  echo $corpo = base64_decode($resulta['corpo']);?> 		
            </div></div>
			 <hr>
			</li>
		 	
				
            <?php } ?>
             
              
		 <div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
				<form class="form-inline my-2 my-lg-0 " method="POST"  action="" ajax="true">	
		  <?php
 if(!empty($_POST["resis1"])){
	$id_user = $_SESSION['id_user'];
$phone = 1;
 	$result_usuario = "INSERT INTO feed (id_user, gosto) VALUES ('$id_user','$phone')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			
 ?> 
 
 <?php

}
?>
		
	 		
				<input required  class="form-control-mt-auto fw-bolder  btn btn-dark text-center" type="hidden" name="resis1" >
<th><i type="submit" name="resis1" class="bi bi-hand-thumbs-up-fill" ></i></th>
     </form> 
        			<form class="form-inline my-2 my-lg-0 " method="POST" action="" ajax="true">	
		  <?php
 if(!empty($_POST["resis2"])){
	$id_user = $_SESSION['id_user'];
$phone = 1;
 	
			$result_usuario = "INSERT INTO feed (id_user, gosto) VALUES ('$id_user','$phone')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			

}
?>			  
		<input required  class="form-control-mt-auto fw-bolder  btn btn-dark text-center" type="hidden" name="resis2" >
				
<th><i type="submit" name="resis2" class="bi bi-emoji-heart-eyes" ></i></th>
     </form>
			        			<form class="form-inline my-2 my-lg-0 " method="POST" action="" ajax="true">	
		  <?php
 if(!empty($_POST["resis3"])){
	$id_user = $_SESSION['id_user'];
$phone = 1;
 	
			$result_usuario = "INSERT INTO feed (id_user, gosto) VALUES ('$id_user','$phone')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			

}
?> 	
				<input required  class="form-control-mt-auto fw-bolder  btn btn-dark text-center" type="hidden" name="resis3" >
<th><i type="submit" name="resis3"class="bi bi-suit-heart-fill" ></i></th>
     </form>  
            			        			<form class="form-inline my-2 my-lg-0 " method="POST" action="" ajax="true">	
		  <?php
 if(!empty($_POST["resis4"])){
	$id_user = $_SESSION['id_user'];
$phone = 1;
 	
			$result_usuario = "INSERT INTO feed (id_user, gosto) VALUES ('$id_user','$phone')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			
}
?>			   
    
		
				<input required  class="form-control-mt-auto fw-bolder  btn btn-dark text-center" type="hidden" name="resis4" >
<th><i type="submit" name="resis4" class="bi bi-x-octagon-fill" ></i></th>
     </form>  
            </tr>
              </thead>
			 <tbody>

		 			
				<tr>
                
				<td> <?php
$result = "SELECT gosto COUNT FROM feed WHERE  gosto";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
			if(!empty($resulta >= 1)){ ?>
	
		<div class="text-center ">
		<small>
		<strong class="text-light text-bolder"> <div class="badge btn-danger"
			title="Participantes"  data-trigger="hover" data-content="Some content"
			>  <?php echo $resulta?> </strong></div> </div></small> <?php } ?></td>
				<td> <?php
$result = "SELECT cpa COUNT FROM feed WHERE  cpa";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
			if(!empty($resulta >= 1)){ ?>
	
		<div class="text-center ">
		<small>
		<strong class="text-light text-bolder"> <div class="badge btn-danger"
			title="Participantes"  data-trigger="hover" data-content="Some content"
			>  <?php echo $resulta?> </strong></div> </div></small> <?php } ?></td>
               <td> <?php
$result = "SELECT v COUNT FROM feed WHERE  v";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
			if(!empty($resulta >= 1)){ ?>
	
		<div class="text-center ">
		<small>
		<strong class="text-light text-bolder"> <div class="badge btn-danger"
			title="Participantes"  data-trigger="hover" data-content="Some content"
			>  <?php echo $resulta?> </strong></div> </div></small> <?php } ?></td>
				<td><?php
$result = "SELECT x COUNT FROM feed WHERE  x";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
			if(!empty($resulta >= 1)){ ?>
	
		<div class="text-center ">
		<small>
		<strong class="text-light text-bolder"> <div class="badge btn-danger"
			title="Participantes"  data-trigger="hover" data-content="Some content"
			>  <?php echo $resulta?> </strong></div> </div></small> <?php } ?></td>
                </tr> 
         
             
              </tbody>
            </table>
          </div>		
			
	 	

 
        	<br>	       	<br>	
			

    
         
               </ul>
	 
	 <br>  <strong>Sorteiados</strong>

	 <div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>My ID</th>
                  <th>Data</th>
				   <th>Evento</th>
                  <th>Sorteio</th>
                   <th>Valor - 10%</th>
				   
                </tr>
              </thead>
			 <tbody>
              				 <?php
if ($_SESSION['usuarioNiveisAcessoId'] == 2  OR "3"){
$result = "SELECT * FROM winner  LIMIT 10";
$resultado = mysqli_query($conn, $result);


?>
		 			  <?php
            while($resulta = mysqli_fetch_assoc($resultado)){ ?>
				<tr>
                
				<td> <?php echo $resulta['id_user'];?></td>
				<td> <?php echo $resulta['date'];?></td>
                <td> <?php echo $id = $resulta['ideve'];?></td>
				<td> <?php echo $eve = $resulta['eve'];?></td>
				<td> <?php echo $valor = base64_decode($resulta['key1']);?></td>
                </tr> 
            <?php } ?>
             
              </tbody>
            </table>
          </div>		
			
	 <?php } ?>
    
 <strong>Sorteio</strong>

	 <div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>My ID</th>
                  <th>Data</th>
				   <th>Evento</th>
                  <th>Sorteio</th>
                   <th>Valor - 10%</th>
				   
                </tr>
              </thead>
			 <tbody>
              				 <?php
if ($_SESSION['usuarioNiveisAcessoId'] == 2  OR "3"){
$result = "SELECT * FROM sorteio  LIMIT 10";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);
?>
		 		  <?php
            while($resulta = mysqli_fetch_assoc($resultado)){ ?>
				<tr>
                
				<td> <?php echo $resulta['id_user'];?></td>
				<td> <?php echo $resulta['date'];?></td>
                <td> <?php echo $id = $resulta['ideve'];?></td>
				<td> <?php echo $eve = $resulta['eve'];?></td>
				<td> <?php echo $valor = base64_decode($resulta['key1']);?></td>
                </tr> 
            <?php } ?>
            
              </tbody>
            </table>
          </div>		
			
	 <?php } ?>
    
	    	<br>	       	<br>	
	
	<?php
include_once ("sort.php");
include_once ("copy.php");

?>
