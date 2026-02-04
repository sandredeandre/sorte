


<div class="row">
<div class="col-lg-4">
 
<div class="dropdown-divider"></div>

 <img  class="d-block w-100  rounded-3 img-thumbnail" src="img/p2.png"  >
<div class="dropdown-divider"></div>
              
               
<div class="dropdown-divider"></div>
<div class=" text-center">
 <?php 
$result = "SELECT *  FROM saldo WHERE  id_user = '$id_user' ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$resulta =base64_decode($resulta["saldofinal"]);
if ($resulta >= 200){
include ("pdt2.php");
} else {?>o9
<div class="badge text-danger"> Fundos insuficientes</div>

<?php
}
?>
</div>
	<div class="dropdown-divider"></div>
				</div>
				
				
				
				
 <div class="col-lg-4">
  
 <div class="dropdown-divider"></div>
   <img  class="d-block w-100  rounded-3 img-thumbnail" src="img/p.png" >
   <div class="dropdown-divider"></div>
   
				<div class="dropdown-divider"></div>
<div class=" text-center">
 <?php 
$result = "SELECT saldofinal  FROM saldo WHERE  id_user = '$id_user' ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$resulta =base64_decode($resulta["saldofinal"]);
if ($resulta >= 200){
include ("pdt.php");
} else {?>
<div class="badge text-danger"> Fundos insuficientes</div>

<?php
}
?>
</div>
	<div class="dropdown-divider"></div>
	</div>
 <div class="col-lg-4">
 
 <div class="dropdown-divider"></div>
   <img  class="d-block w-100  rounded-3 img-thumbnail" src="img/p1.png">
       <div class="dropdown-divider"></div>
				<div class="dropdown-divider"></div>
<div class=" text-center">
 <?php 
$result = "SELECT saldofinal  FROM saldo WHERE  id_user = '$id_user' ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$resulta =base64_decode($resulta["saldofinal"]);
if ($resulta >= 200){
include ("pdt1.php");
} else {?>
<div class="badge text-danger"> Fundos insuficientes</div>
<?php
}
?>
</div>
	<div class="dropdown-divider"></div>  
  	</div>
 </div>
 
