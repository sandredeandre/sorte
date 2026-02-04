 <?php
include_once ("header.php");  

?>


<?php
if(isset($_SESSION['id_user'])){
include_once  ("menu.php");
}else{
include_once ("blog.php");
}
?>
   
    
<?php

if (!empty($_SESSION['usuarioNiveisAcessoId'] == "3")){
 $id_prod  = $_SESSION['id_prod'];
$result = "SELECT * FROM winner WHERE id_prod = '$id_prod' ";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resulta)){
		
		
		?>
		<br><br><br><br>
			<div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID do utilizador</th>
                  <th>Data</th>
				   <th>Evento</th>
                  <th>Sorteio</th>
                 
                  <th>Valor - 10%</th>
				   
                </tr>
              </thead>
			
              <tbody>
                    
             		  <?php
            while($resulta = mysqli_fetch_assoc($resultado)){ ?>
				<tr>
                
				<td> <?php echo $resulta['id_user'];?></td>
				<td> <?php echo $resulta['date'];?></td>
                <td> <?php echo $resulta['ideve'];?></td>
				<td> <?php echo $eve = $resulta['eve'];?></td>
				<td> <?php echo $key1 =base64_decode($resulta['key1']);?></td>
                </tr> 
            <?php } 
			
			?>
             
              </tbody>
            </table>
          </div>
			
			  </main>
      </div>
    
<?php
				$result = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, id_prod) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1','$id_prod')";
				$resultado_usuario = mysqli_query($conn, $result);
				
				
			$result = "DELETE FROM sorteiop  WHERE id_prod = '$id_prod";
			$resultado_usuario = mysqli_query($conn, $result);
				
				
		
					 }else{	
		
						require("erro3.php");
						}
			
					 
				?>
			

   
	<?php
include_once ("win1.php");
include_once ("win2.php");

?>
 

	<?php
include_once ("sort.php");


?>


<?php
}else{
require("erro4.php");	
require("erro3.php");
require("erro.php");
require("erro2.php");
require("erro1.php");
}

include_once ("copy.php");
?>

 
	

	
				
	
