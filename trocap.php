 <div class=" fst-italic text-dark text-center">
    <strong>TROCAS & VENDAS </strong> 
    </div> 
	
				<div class="dropdown-divider"></div>
<div class="text-center text-dark fw-bolder">
Faça vendas e trocas direitas com nosso auxilio administrativo</div>
﻿<div class="row">
<div class="col-lg-4">
<div class="col-sm-4">              
<?php 

$result = " SELECT * FROM produtos WHERE finalidd = 2 LIMIT 9"; 
$resultado = mysqli_query ($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);
  if(isset($resulta)){
  	
$result = " SELECT * FROM produtos WHERE finalidd = 2 LIMIT 9"; 
$resultado = mysqli_query ($conn, $result);
  while($resulta = mysqli_fetch_assoc($resultado)){
?>
<div class="dropdown-divider"></div>
<img  class="d-block w-100  rounded-3 img-thumbnail" src="../img/<?php echo $md = base64_decode($resulta['img']); ?>"  >
<div class="dropdown-divider"></div>
<div class="dropdown-divider"></div>
<div class="card">
<h4 class="text-dark fw-bolder btn"> 
Inicio <div class="badge text-danger"><?php echo $resulta['datai'];?>
</div>
Fim <div class="badge text-danger"><?php echo $resulta['datef'];?></div>
<div class="dropdown-divider"></div>Sorteio <div class="badge text-danger"><?php echo $eve = md5($resulta['eve']);?></div>
<div class="dropdown-divider"></div>Taxa 
<div class="badge  text-danger"> <?php echo $kkk = $resulta['key1'];?></div> 
	Estado <div class="badge text-danger">	<?php
if ( $resulta['estado']  < 1){
echo "Desactivo";
} else {echo "Activo"; ?>

<?php
}
if ($resulta['estado'] >= 1){ ?>
 	<div class="text-center">		
<a href="partp.php"><span class="btn btn-danger ">Participar</span></a>
</div><?php
}
?>
</div></h4>
 
             </div> 
        	
<p class="text-dark fw-bolder ">   Fornecedor: <?php  


$id_forn = $resulta['id_fornece'];


		 
$result = "SELECT * FROM  produtos LEFT JOIN fornecedor ON
 (produtos.id_fornece = fornecedor.id) WHERE produtos.id_fornece = fornecedor.id  AND id.fornecedor = '$id_forn' LIMIT 1 ";
  $resultado = mysqli_query($conn, $result);

           $result = mysqli_fetch_assoc($resultado);
            
            	?>
			
             <img width="30" class="rounded-circle img-thumbnail" src="../img/<?php echo $imgg = md5($result['img']);?>" >
  <?php
 echo $nome = base64_decode($result['nome']);
  echo $nomet = base64_decode($result['outronome']);


?>
        </p>   
<div class="dropdown-divider"></div>
	</div>
				</div>
<?php }

 }else {?>
 	<div class="text-center bolder bolder-danger">
<h1 class="display-1 text-bolder ">Sem Produtos<h1>

</div>
<?php
}
?>
</div>
				
			

 </div>
