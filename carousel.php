

<div class="dropdown-divider"></div>
	 
<div class=" fst-italic text-dark text-center">
    <strong>SORTEIO INSTANTANIO DE VALORES</strong> 
    </div> 
	
				<div class="dropdown-divider"></div>
<div class="text-center text-dark fw-bolder">
Ganha dinheiro agora, escolha opção abaixo</div>
<div class="row">
<div class="col-lg-4">
 <?php 
 $id_user=$_SESSION["id_user"];
 	$result = "SELECT id_user COUNT FROM sorteio WHERE  tipo = 3";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	?>
		<div class=" text-center ">
	<div class="badge ">
		<h6 class=" text-small    fw-bolder text-center text-danger ">Participantes	</h6>
 <div class="dropdown-divider"></div>
00<?php 

echo $resulta;


?>
		 </div></div>
<div class="dropdown-divider"></div>

 <img  class="d-block w-100  rounded-3 img-thumbnail" src="../img/f2.jpg"  >
<div class="dropdown-divider"></div>
              
                <p class="text-dark fw-bolder text-back "> 
				Tenha dinheiro sempre em mão
				</p>
<div class="dropdown-divider"></div>
<div class=" text-center">
 <?php 
$result = "SELECT *  FROM saldo WHERE  id_user = '$id_user' ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$resulta =base64_decode($resulta["saldofinal"]);
if ($resulta >= 200){
include ("part2.php");
} else {?>
<div class="badge text-danger"> Fundos insuficientes</div>

<?php
}
?>
</div>
	<div class="dropdown-divider"></div>
				</div>
				
				
				
				
 <div class="col-lg-4">
  <?php 
 	$result = "SELECT id_user COUNT FROM sorteio WHERE  tipo = 1 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	?>
		<div class="text-center ">
	<div class="badge ">
		<h6 class="text-small  fw-bolder text-center text-danger ">Participantes </h6>
 <div class="dropdown-divider"></div>
00<?php 

echo $resulta;

?></div></div>
 <div class="dropdown-divider"></div>
   <img  class="d-block w-100  rounded-3 img-thumbnail" src="../img/f.jpg" >
   <div class="dropdown-divider"></div>
     <p class="text-dark fw-bolder text-back "> 
				Ganha dinheiro, e tenha vida prospera
				</p>
				<div class="dropdown-divider"></div>
<div class=" text-center">
 <?php 
$result = "SELECT saldofinal  FROM saldo WHERE  id_user = '$id_user' ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$resulta =base64_decode($resulta["saldofinal"]);
if ($resulta >= 200){
include ("part.php");
} else {?>
<div class="badge text-danger"> Fundos insuficientes</div>

<?php
}
?>
</div>
	<div class="dropdown-divider"></div>
	</div>
 <div class="col-lg-4">
 <?php 
 	$result = "SELECT id_user COUNT FROM sorteio WHERE  tipo = 2";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	?>
		<div class="text-center ">
	<div class="badge ">
		<h6 class=" round-circle  fw-bolder text-center text-danger ">Participantes	</h6>
 <div class="dropdown-divider"></div>
00<?php 

echo $resulta;

?></div></div>
 <div class="dropdown-divider"></div>
   <img  class="d-block w-100  rounded-3 img-thumbnail" src="../img/f1.jpg">
       <div class="dropdown-divider"></div><p class=" fw-bolder text-dark small"> 
			Para uma vida prospera
				</p>
				<div class="dropdown-divider"></div>
<div class=" text-center">
 <?php 
$result = "SELECT saldofinal  FROM saldo WHERE  id_user = '$id_user' ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$resulta =base64_decode($resulta["saldofinal"]);
if ($resulta >= 200){
include ("part1.php");
} else {?>
<div class="badge text-danger"> Fundos insuficientes</div>
<?php
}
?>
</div>
	<div class="dropdown-divider"></div>  
  	</div>
 </div>
 
