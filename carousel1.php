<META HTTP-EQUIV = "REFRESH" CONTENT="";URL="vet.php">

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
 (winner.id_user= user.id) WHERE winner.id_user = user.id  ";
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
 $_SESSION["tipoinstId_user"] = $resulta['id_user'];
			if($_SESSION["tipoinst"]=="1"){
echo "1000,00Kz";

}elseif ($_SESSION["tipoinst"]=="2") {
	echo "2 000,00Kz";
}elseif ($_SESSION["tipoinst"]=="3") {
	echo "5 000,00Kz";
}elseif ($_SESSION["tipoinst"]=="4") {
	echo "10 000,00Kz";
}elseif ($_SESSION["tipoinst"]=="5") {
	echo "20000,00Kz";
}elseif ($_SESSION["tipoinst"]=="6") {
	echo "50 000,00Kz";
}elseif ($_SESSION["tipoinst"]=="7") {
	echo "200 000,00Kz";
}elseif ($_SESSION["tipoinst"]=="8") {
	echo "2 000 000,00Kz";
}elseif ($_SESSION["tipoinst"]=="9") {
	echo "50 000,00Kz";
}else{
	echo "Sem vencedor ";
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


<div class="dropdown-divider"></div>
<div class="row">
<div class="col-4">
<?php if ($_SESSION["tipoinst"]!="1") {?>
 <?php 
 $id_user=$_SESSION["id_user"];
 	$result = "SELECT id_user COUNT FROM sorteioinst WHERE  tipoinst = 1";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	if (isset($resulta)) {
		$result = "SELECT * FROM sorteioinst  LEFT JOIN user ON
 (sorteioinst.id_user= user.id) WHERE sorteioinst.id_user = user.id && sorteioinst.tipoinst=1 ";
  $resultado = mysqli_query($conn, $result);
while ($resulta = mysqli_fetch_assoc($resultado)){;
			$img= base64_decode($resulta['img'])
			?>
<img width="30" class="rounded-circle img-thumbnail" src="../img/<?php echo $img;?>" >
<?php
		
}
	}
	?>
 <a href="vet100.php"><img  class="img  rounded-3 img-thumbnail" src="../img/pinst.png"  ></a>
<div class="dropdown-divider"></div>
              
               
<div class="dropdown-divider"></div>
<div class=" text-center">

<?php

$result = "SELECT * FROM winner WHERE id_user='$id_user'&& tipoinst =1";
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
<?php if ($_SESSION["tipoinst"]!="2") {?>
	 <?php 
 $id_user=$_SESSION["id_user"];
 	$result = "SELECT id_user COUNT FROM sorteioinst WHERE  tipoinst = 2";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	if (isset($resulta)) {
		$result = "SELECT * FROM sorteioinst  LEFT JOIN user ON
 (sorteioinst.id_user= user.id) WHERE sorteioinst.id_user = user.id && sorteioinst.tipoinst=2 ";
  $resultado = mysqli_query($conn, $result);
while ($resulta = mysqli_fetch_assoc($resultado)){;
			$img= base64_decode($resulta['img'])
			?>
<img width="30" class="rounded-circle img-thumbnail" src="../img/<?php echo $img;?>" >
<?php
		
}
	}
	?>

 <a href="vet200.php"><img  class="img  rounded-3 img-thumbnail" src="../img/pinst1.png"  ></a>
<div class="dropdown-divider"></div>
              
               
<div class="dropdown-divider"></div>
<div class=" text-center">



<?php

$result = "SELECT * FROM winner WHERE id_user='$id_user' && tipoinst =2";
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
 	<?php if ($_SESSION["tipoinst"]!="3") {?>
 		 <?php 
 $id_user=$_SESSION["id_user"];
 	$result = "SELECT id_user COUNT FROM sorteioinst WHERE  tipoinst = 3";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	if (isset($resulta)) {
		$result = "SELECT * FROM sorteioinst  LEFT JOIN user ON
 (sorteioinst.id_user= user.id) WHERE sorteioinst.id_user = user.id && sorteioinst.tipoinst=3 ";
  $resultado = mysqli_query($conn, $result);
while ($resulta = mysqli_fetch_assoc($resultado)){;
			$img= base64_decode($resulta['img'])
			?>
<img width="30" class="rounded-circle img-thumbnail" src="../img/<?php echo $img;?>" >
<?php
		
}
	}
	?>
 	
<a href="vet500.php"><img  class="img  rounded-3 img-thumbnail" src="../img/pinst2.png"  ></a>             
<div class="dropdown-divider"></div>
<div class=" text-center">

<?php

$result = "SELECT * FROM winner WHERE id_user='$id_user' && tipoinst =3";
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
			</div>
	<div class="row">	
		
 <div class="col-4">
 	<?php if ($_SESSION["tipoinst"]!="4") {?>
 		 <?php 
 $id_user=$_SESSION["id_user"];
 	$result = "SELECT id_user COUNT FROM sorteioinst WHERE  tipoinst = 4";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	if (isset($resulta)) {
		$result = "SELECT * FROM sorteioinst  LEFT JOIN user ON
 (sorteioinst.id_user= user.id) WHERE sorteioinst.id_user = user.id && sorteioinst.tipoinst=4 ";
  $resultado = mysqli_query($conn, $result);
while ($resulta = mysqli_fetch_assoc($resultado)){;
			$img= base64_decode($resulta['img'])
			?>
<img width="30" class="rounded-circle img-thumbnail" src="../img/<?php echo $img;?>" >
<?php
		
}
	}
	?>
 
<a href="vet1m.php"><img  class="img  rounded-3 img-thumbnail" src="../img/pinst3.png"  ></a>
              
               
<div class="dropdown-divider"></div>
<div class=" text-center">



<?php

$result = "SELECT * FROM winner WHERE id_user='$id_user' && tipoinst =4";
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
 	<?php if ($_SESSION["tipoinst"]!="5") {?>
 		 <?php 
 $id_user=$_SESSION["id_user"];
 	$result = "SELECT id_user COUNT FROM sorteioinst WHERE  tipoinst = 5";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	if (isset($resulta)) {
		$result = "SELECT * FROM sorteioinst  LEFT JOIN user ON
 (sorteioinst.id_user= user.id) WHERE sorteioinst.id_user = user.id && sorteioinst.tipoinst=5 ";
  $resultado = mysqli_query($conn, $result);
while ($resulta = mysqli_fetch_assoc($resultado)){;
			$img= base64_decode($resulta['img'])
			?>
<img width="30" class="rounded-circle img-thumbnail" src="../img/<?php echo $img;?>" >
<?php
		
}
	}
	?>
 	
<a href="vet2m.php"><img  class="img  rounded-3 img-thumbnail" src="../img/pinst4.png"  ></a>
              
               
<div class="dropdown-divider"></div>
<div class=" text-center">

<?php

$result = "SELECT * FROM winner WHERE id_user='$id_user' && tipoinst =5";
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
 	<?php if ($_SESSION["tipoinst"]!="6") {?>
 		 <?php 
 $id_user=$_SESSION["id_user"];
 	$result = "SELECT id_user COUNT FROM sorteioinst WHERE  tipoinst = 6";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	if (isset($resulta)) {
		$result = "SELECT * FROM sorteioinst  LEFT JOIN user ON
 (sorteioinst.id_user= user.id) WHERE sorteioinst.id_user = user.id && sorteioinst.tipoinst=6 ";
  $resultado = mysqli_query($conn, $result);
while ($resulta = mysqli_fetch_assoc($resultado)){;
			$img= base64_decode($resulta['img'])
			?>
<img width="30" class="rounded-circle img-thumbnail" src="../img/<?php echo $img;?>" >
<?php
		
}
	}
	?>
 	
<a href="vet5m.php"><img  class="img  rounded-3 img-thumbnail" src="../img/pinst5.png"  ></a>
              
               
<div class="dropdown-divider"></div>
<div class=" text-center">
 
<?php

$result = "SELECT * FROM winner WHERE id_user='$id_user' && tipoinst =6";
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
 </div>
 
<div class="dropdown-divider"></div>
	 

	

<div class="row">
<div class="col-4">
<?php if ($_SESSION["tipoinst"]!="7") {?>
	 <?php 
 $id_user=$_SESSION["id_user"];
 	$result = "SELECT id_user COUNT FROM sorteioinst WHERE  tipoinst = 7";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	if (isset($resulta)) {
		$result = "SELECT * FROM sorteioinst  LEFT JOIN user ON
 (sorteioinst.id_user= user.id) WHERE sorteioinst.id_user = user.id && sorteioinst.tipoinst=7 ";
  $resultado = mysqli_query($conn, $result);
while ($resulta = mysqli_fetch_assoc($resultado)){;
			$img= base64_decode($resulta['img'])
			?>
<img width="30" class="rounded-circle img-thumbnail" src="../img/<?php echo $img;?>" >
<?php
		
}
	}
	?>

<a href="vet100m.php"><img  class="img  rounded-3 img-thumbnail" src="../img/pinst6.png"  ></a>
              
               
<div class="dropdown-divider"></div>
<div class=" text-center">

<?php

$result = "SELECT * FROM winner WHERE id_user='$id_user'&& tipoinst =7";
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
<?php if ($_SESSION["tipoinst"]!="8") {?>
	 <?php 
 $id_user=$_SESSION["id_user"];
 	$result = "SELECT id_user COUNT FROM sorteioinst WHERE  tipoinst = 8";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	if (isset($resulta)) {
		$result = "SELECT * FROM sorteioinst  LEFT JOIN user ON
 (sorteioinst.id_user= user.id) WHERE sorteioinst.id_user = user.id && sorteioinst.tipoinst=8 ";
  $resultado = mysqli_query($conn, $result);
while ($resulta = mysqli_fetch_assoc($resultado)){;
			$img= base64_decode($resulta['img'])
			?>
<img width="30" class="rounded-circle img-thumbnail" src="../img/<?php echo $img;?>" >
<?php
		
}
	}
	?>

 <a href="vet1ml.php"><img  class="img  rounded-3 img-thumbnail" src="../img/pinst7.png"  ></a>
<div class="dropdown-divider"></div>
              
               

<div class=" text-center">

<?php

$result = "SELECT * FROM winner WHERE id_user='$id_user' && tipoinst =8";
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
 	<?php if ($_SESSION["tipoinst"]!="9") {?>
 		 <?php 
 $id_user=$_SESSION["id_user"];
 	$result = "SELECT id_user COUNT FROM sorteioinst WHERE  tipoinst = 9";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	if (isset($resulta)) {
		$result = "SELECT * FROM sorteioinst  LEFT JOIN user ON
 (sorteioinst.id_user= user.id) WHERE sorteioinst.id_user = user.id && sorteioinst.tipoinst=9 ";
  $resultado = mysqli_query($conn, $result);
while ($resulta = mysqli_fetch_assoc($resultado)){;
			$img= base64_decode($resulta['img'])
			?>
<img width="30" class="rounded-circle img-thumbnail" src="../img/<?php echo $img;?>" >
<?php
		
}
	}
	?>
 	
<a href="vet50m.php"><img  class="img  rounded-3 img-thumbnail" src="../img/pinst8.png"  ></a>
              
               
<div class="dropdown-divider"></div>
<div class=" text-center">

<?php

$result = "SELECT * FROM winner WHERE id_user='$id_user' && tipoinst =9";
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
 </div>
 