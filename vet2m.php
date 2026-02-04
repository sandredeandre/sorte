
<?php
include_once ("header.php");  

if(isset($_SESSION['id_user'])){
include_once  ("menu.php");
}else{
include_once ("blog.php");

}?>




<div class="card-header">
	<div class="text-danger display-6">
<?php
if (isset($_SESSION["id_user"])) {
	$result = "DELETE FROM sorteio  WHERE id_user=0 ";
			$resultado_usuario = mysqli_query($conn, $result);
			$result = "DELETE FROM sorteiok  WHERE id_user=0 ";
			$resultado_usuario = mysqli_query($conn, $result);
				$result = "DELETE FROM sorteiop  WHERE id_user=0 ";
			$resultado_usuario = mysqli_query($conn, $result);
				$result = "DELETE FROM sorteioinst  WHERE id_user=0 ";
			$resultado_usuario = mysqli_query($conn, $result);
				$result = "DELETE FROM winner  WHERE id_user=0 ";
			$resultado_usuario = mysqli_query($conn, $result);
			$result = "DELETE FROM winbackup  WHERE id_user=0 ";
			$resultado_usuario = mysqli_query($conn, $result);
						
$id_user=$_SESSION["id_user"];
$result = "SELECT * FROM winner  LEFT JOIN user ON
 (winner.id_user= user.id) WHERE winner.id_user = user.id  && tipoinst = 5";
  $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado); 
?>		<div class="text-center">
		
            	
			<table class="table table-striped table-sm">
	<thead>
		<td>Img</td>
		<td>Nome</td>
		<td>ID</td>
		<td>Entrada</td>
		<td>Saida</td>
	</thead>
 	<tbody><tr>
			<td>
				 <?php  if (isset($resulta['img'])){?>
             <img width="30" class="rounded-circle img-thumbnail" src="../img/<?php echo $img = base64_decode($resulta['img']);?>" >
<?php }else{
?>
<img width="30" class="rounded-circle img-thumbnail" src="../img/logoll.PNG" >
<?php }
?>
             </td>
			 
			 <div class="dropdown-divider"></div>
			<td><?php echo $mnii = base64_decode($resulta['nome']);?>   <?php  echo $mm = base64_decode($resulta['outronome']);
			?></td>
			<td><?php echo $mno = $resulta['code'];
?></td>
			<td> <?php echo $mni = $resulta['key1'];
?></td>
			<td><?php 

 $_SESSION["tipoinst"] = $resulta['tipoinst'];
			if($resulta['tipoinst']=="5"){
echo "20000,00Kz";

}else {
	echo "00,00Kz";
}


	}

 ?> 

</td>
<td> <?php if (isset($_SESSION["tipoinstId_user"])== $_SESSION["id_user"]) {

?>
	<a  style="z-index: 99999999"class="btn btn-default text-dark text-center  fw-bold  " href="win.php">Paga-me</a>
<?php 
}?>
</td>
 	</tr>
 	</tbody>
 	</table>      
	</div>
	</div>

<?php if ($_SESSION["tipoinst"]!="5") {?>
<div class="dropdown-divider"></div>
<div class="row">
<div class="col-4">

	<?php 
 $id_user=$_SESSION["id_user"];
 	$result = "SELECT id_user COUNT FROM winbackup WHERE  tipoinst = 5";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);?>
	<div class="text-center">
	<h6 class="display-6 text-dark"><?php echo $resulta; ?></h6></div>
	<div class="dropdown-divider"></div>
		<img width="50%" class="rounded-circle img-thumbnail" src="../img/prem.png" >	
	<div class="dropdown-divider"></div>	
<?php
	if (isset($resulta)) {
		$result = "SELECT * FROM winbackup  LEFT JOIN user ON
 (winbackup.id_user= user.id) WHERE winbackup.id_user = user.id && winbackup.tipoinst = 5";
  $resultado = mysqli_query($conn, $result);
while ($resulta = mysqli_fetch_assoc($resultado)){;
			$img= base64_decode($resulta['img'])
			?>
		
<img width="15%" class="rounded-circle img-thumbnail" src="../img/<?php echo $img;?>" >		

<?php
		
}
	}
	?>
				</div>

  <div class="col-4">

 
 <img  class="img  rounded-3 img-thumbnail" src="../img/pinst4.png"  >
<div class="dropdown-divider"></div>
              
               
<div class="dropdown-divider"></div>
<div class=" text-center">
 <?php 
$result = "SELECT *  FROM saldo WHERE  id_user = '$id_user' ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$resulta =base64_decode($resulta["saldofinal"]);
if ($resulta >= 2000){
include ("partinst4.php");
} else {?>
<div class="badge text-danger"> Fundos insuficientes</div>

<?php
}
$result = "SELECT * FROM winner WHERE id_user='$id_user'&& tipoinst = 5";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);
if (isset($resulta)){
?>
<div class="badge text-danger"> Ganho</div>

<?php }
?>
</div>
	<div class="dropdown-divider"></div>
<?php } ?>
	

				</div>
			
 <div class="col-4">
 	<?php 
 $id_user=$_SESSION["id_user"];
 	$result = "SELECT id_user COUNT FROM sorteioinst WHERE  tipoinst = 5";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	if (isset($resulta)) {
		$result = "SELECT * FROM sorteioinst  LEFT JOIN user ON
 (sorteioinst.id_user= user.id) WHERE sorteioinst.id_user = user.id && sorteioinst.tipoinst = 5";
  $resultado = mysqli_query($conn, $result);
while ($resulta = mysqli_fetch_assoc($resultado)){;
			$img= base64_decode($resulta['img'])
			?>
<img width="20%" class="rounded-circle img-thumbnail" src="../img/<?php echo $img;?>" >
<?php
		
}
	}
	?>
				</div>
			</div>
		
		
 
	
				</div>
 </div>
 
<?php 
include ("copy.php");





?>



	
	
	

	

	
	

	
		



	
	
	

	

	
	

	
		
