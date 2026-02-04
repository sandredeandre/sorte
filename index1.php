
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
 
<div class="text-center ">
		<h2 class="badge round-circle    fw-bolder text-center text-danger ">Sorteios Activos</h2>
		 </div>



<?php  

$result = " SELECT * FROM produtos WHERE estado = 1 LIMIT 94 "; 
$resultado = mysqli_query ($conn, $result);

  while($resulta = mysqli_fetch_assoc($resultado)){ 
$id_prod = $resulta['id'];
$eve = $resulta['eve'];
?>	


<div class="dropdown-divider"></div>
 

<img  class="d-block w-100  rounded-3 img-thumbnail" src="img/<?php echo $img =base64_decode($resulta['img']); ?>"  >
<div class="dropdown-divider"></div>


<div class="dropdown-divider"></div>
<div class="card">
<h4 class="text-dark fw-bolder btn"> 
Inicio <div class="badge text-danger"><?php echo $resulta['datai'];?>
</div>

Fim <div class="badge text-danger"><?php echo $resulta['datef'];?></div>

<div class="dropdown-divider"></div>
         	Sorteio <div class="badge text-danger"><?php echo $resulta['eve'];?></div>

<div class="dropdown-divider"></div>
Taxa 
 <div class="badge  text-danger"> <?php echo $krx =base64_decode($resulta['key1']); ?></div> 
	Estado <div class="badge text-danger">	<?php
if ( $resulta['estado']  < 1){
echo "Desactivo";
} else {echo "Activo"; ?>

<?php
}
if ($resulta['estado'] >= 1){ ?>
 	<div class="text-center">		
<a href="partp.php"><span class="btn btn-danger circle">Participar</span></a>
</div><?php
}
?>
</div></h4>
 
             </div> 
           	

<div class="dropdown-divider"></div>
	</div>
				</div>
<?php }
?>
</div>
				
				
				





<hr class="fw-danger">
	<div class="text-center ">
		<h2 class="badge round-circle    fw-bolder text-center text-danger ">Sorteios Desactivos</h2>
		 </div>	

<?php  

$result = " SELECT * FROM produtos WHERE estado = 0 LIMIT 94 "; 
$resultado = mysqli_query ($conn, $result);

  while($resulta = mysqli_fetch_assoc($resultado)){ 
$id_prod = $resulta['id'];
$eve = $resulta['eve'];
?>	


<div class="dropdown-divider"></div>
 

<img  class="d-block w-100  rounded-3 img-thumbnail" src="img/<?php echo $id =base64_decode($resulta['img']); ?>"  >
<div class="dropdown-divider"></div>


<div class="dropdown-divider"></div>
<div class="card">
<h4 class="text-dark fw-bolder btn"> 
Inicio <div class="badge text-danger"><?php echo $resulta['datai'];?>
</div>

Fim <div class="badge text-danger"><?php echo $resulta['datef'];?></div>

<div class="dropdown-divider"></div>
         	Sorteio <div class="badge text-danger"><?php echo $resulta['eve'];?></div>

<div class="dropdown-divider"></div>
Taxa 
 <div class="badge  text-danger"> <?php echo $res =base64_decode($resulta['key1']);?></div> 
	Estado <div class="badge text-danger">	<?php
if ( $resulta['estado']  < 1){
echo "Desactivo";
} else {echo "Activo"; ?>

<?php
}
if ($resulta['estado'] >= 1){ ?>
 	<div class="text-center">		
<a href="partp.php"><span class="btn btn-danger circle">Participar</span></a>
</div><?php
}
?>
</div></h4>
 
             </div> 
           	

<div class="dropdown-divider"></div>
	</div>
				</div>
<?php }
?>
</div>

	<br> <br>
<?php
include_once ("copy.php");


?>



	
	
	

	

	
	

	
		
