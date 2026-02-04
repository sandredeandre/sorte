<?php
include_once ("header.php");  
include ("menu.php");
include ("vermenu.php");
include ("main.php");
?>

<br>
        
<?php

$result = "SELECT  * FROM sorteio WHERE id_user";
$resultado = mysqli_query($conn, $result);


		
		 
				?>
			 <div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
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
                
				<td> <?php echo $id = $resulta['id_user'];?></td>
				<td> <?php echo $data = $resulta['date'];?></td>
                <td> <?php echo $resulta['ideve'];?></td>
				<td> <?php echo $eve = $resulta['eve'];?></td>
				<td> <?php echo $key1 = base64_decode($resulta['key1']);?></td>
                </tr> 
            <?php } 
			
			?>
              </tbody>

            </table>
          </div>
			

        </main>
      </div>
    

	<?php
include_once ("sort.php");
include_once ("copy.php");

?>



 
	

	
				
	
