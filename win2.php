  
    
<?php

if (!empty($_SESSION['usuarioNiveisAcessoId'] == "3")){


$result = "SELECT * FROM winner WHERE tipo=3 && premio = 10000000";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resulta)){
		$id_user  = $resulta ['id_user'];
		$date  = $resulta ['date'];
		$ideve  = $resulta ['ideve'];
		$eve = $resulta ['eve'];
		$key1 = $resulta ['key1'];
		
		?>
		<nav class="nav-tabs navbar-expand-lg navbar-danger btn-danger">
</nav>
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
               <tr>
                  <td><?php echo $id_user ?></td>
                  <td><?php echo $date ?></td>
                  <td><?php echo $ideve?></td>
                  <td><?php echo $eve = $eve;?></td>
				   <td><?php echo  $ek = $key1; ?></td>
                </tr>
             
              </tbody>
            </table>
          </div>
			
			  </main>
      </div>
    
<?php
				$result = "INSERT INTO winbackup (id_user,   date, ideve, eve,  key1) 
			VALUES ('$id_user', '$date', '$ideve', '$eve', '$key1')";
				$resultado_usuario = mysqli_query($conn, $result);
				
				
			$result = "DELETE FROM sorteio  WHERE tipo=3 && premio = 10000000";
			$resultado_usuario = mysqli_query($conn, $result);
				
				
		
					 }else{	
		
						require("erro3.php");
						}
			
					 
				?>
			


	<?php
include_once ("sort.php");


?>


<?php
}else{
require("erro3.php");
}
include_once ("copy.php");
?>

 
	

	
	
	
	
