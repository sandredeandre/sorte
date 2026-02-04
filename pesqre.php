
<?php
include("header.php");
include("menu.php");
?>
<br><br><br><br>


	<?php if (isset($_POST["psqs"])) {
		 $psqs=$_POST["psqs"]; ?>
	
	<br><br><br><br>	

				 <?php
				
 $result = "SELECT * FROM winbackup WHERE ideve='$psqs' OR  eve='$psqs' ";
 $resultado = mysqli_query($conn, $result);
$resultan = mysqli_num_rows($resultado);
if (!empty($resultan)) {
	# code...

?>
<table class="table table-striped table-sm">
	<thead>
		
		
		<td>Evento</td>
		<td>Id Evento</td>
		<td>Data</td>
		
				<td>Estado</td>
	</thead>
 	<tbody>		 			  <?php
 while ($resulta = mysqli_fetch_assoc($resultado)) { 
?>
<tr>
			<td><?php echo $mno = $resulta['eve'];
?></td>
			<td> <?php echo $mni = $resulta['ideve'];
?></td>
			<td> <?php echo $mni = $resulta['date'];
?></td>
			<td>Vencida</td>

 	</tr>
 	
	<?php }?>			
</tbody>
 	</table> 

 
<?php }  
}else {
 $result = "SELECT * FROM winner WHERE ideve='$psqs' OR  eve='$psqs' ";
 $resultado = mysqli_query($conn, $result);
$resultan = mysqli_num_rows($resultado);
if (!empty($resultan)) {
	# code...

?>
<table class="table table-striped table-sm">
	<thead>
		
		
		<td>Evento</td>
		<td>Id Evento</td>
		<td>Data</td>
		
				<td>Estado</td>
	</thead>
 	<tbody>		 			  <?php
 while ($resulta = mysqli_fetch_assoc($resultado)) { 
?>
<tr>
			<td><?php echo $mno = $resulta['eve'];
?></td>
			<td> <?php echo $mni = $resulta['ideve'];
?></td>
			<td> <?php echo $mni = $resulta['date'];
?></td>
			<td>Venceu</td>

 	</tr>
 	
	<?php }?>			
</tbody>
 	</table> 

 
<?php }	
}

include("copy.php");
?>