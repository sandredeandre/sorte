<?php
include_once ("header.php");  

if(isset($_SESSION['id_user'])){
	
include ("menu.php");
}else{
include_once ("blog.php");
} ?>

<div class="text-center">

     <br>
     
<div class="dropdown-divider"></div>     
     <strong class="small">365 - Kixikila</strong>
</div>
    
<div class="dropdown-divider"></div>    
     <br> <br>

<?php
if(isset($_SESSION['id_user'])){
$id_user = $_SESSION['id_user'];
?>
	<h4 class="display-4 text-danger">Único</h4>
 
<!-- select -->


<div class="table-responsive ">
         <table class="table table-striped table-sm">

            
             <thead>
  
                <tr>
                  <th>Entrada</th>
  
  <th>Dias</th>
				   <th>Valor</th>
				   <th>Retorno</th>
                  <th>Estado</th>
   
                      <th>Corridos</th>,
         </tr>
              </thead>
              
<?php 
if(isset($_POST['addu'])){
//ROUND id LIMIT 
$addu = $_POST['addu'];
$result = "SELECT * FROM sorteiok   WHERE id='$addu' && id_user = '$id_user' && tipo = 2  LIMIT 1";
  $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);

	include("fun.dt.php");

$lumbo = diasQuant($datai);
$lumb = $lumbo;
 ?>
 	
<tbody>	
		<tr>
<td >  
 <h6  class=" fw-bolder" >    
<?php
if ($resulta['key1']  >= 1){
echo $resulta['key1']; 
}else {?>
Sem Dados
<?php 
 }?></h6>
</td>
<td>
 <h6  class=" fw-bolder" >    
<?php
if ($resulta['dias']  >= 1){
echo $dias = $resulta['dias'];
}else {?>
Sem Dados
<?php 
 }?></h6>
</td>    
 <td>
 <h6  class=" fw-bolder" >    
<?php
if ($resulta['valor']  >= 1){
echo $valor = $resulta['valor']; 
}else {?>
Sem Dados
<?php 
 }?></h6>

</td>   
<td>
 <h6  class=" fw-bolder" >    
<?php

echo $resulta['rfinal']; 
?></h6>

</td>


<td>
 <h6  class=" fw-bolder" >    
<?php
// colocar aqui o participar diário e o sacar...
if ($lumb==$resulta['dias'] && $resulta['rfinal'] >=  $resulta['valor']  && $resulta['finalidd'] == 1  && $resulta['estado'] ==  1){
echo Vencido;
// up saldo
$key1 = $resulta['rfinal']; 
  $result = "SELECT * FROM saldo   WHERE id='$addu' && id_user = '$id_user' && tipo = 2  LIMIT 1";
  $resultado = mysqli_query($conn, $result);
 $resultas = mysqli_fetch_assoc($resultado);
  $final = $resultas['saldofinal']; 
  $key1 = $final + $key1;
  $key1 = base64_encode($key1);
 $result = "UPDATE saldo SET saldofinal =  '$key1'  WHERE saldo . id_user = '$id_user' ";
 $resultado = mysqli_query($conn, $result);
 $id = $resulta['id']; 
   $result = "UPDATE sorteiok SET finalidd =  0 estado = 0 WHERE sorteiok . id_user = '$id_user' AND sorteiok.id = '$id' ";
 $resultado = mysqli_query($conn, $result);
 
}elseif($lumb >$resulta['dias'] && $resulta['rfinal'] >=  $resulta['valor']  && $resulta['finalidd'] == 0  && $resulta['estado'] ==  0){
echo Vencido;
}else{
echo "Activo";
?>

<?php 
 }?></h6>

</td>
<td>
 <h6  class=" fw-bolder" >    
<?php
if ($lumb >$resulta['dias'] && $resulta['finalidd'] == 0  && $resulta['estado'] ==  0){
echo "Desactivo";
}else {
echo $lumb;}
?></h6>

</dt>
        </tr> 

</tbody>          
<?php 
}
}?>

</table>

          </div>		
    
	<h4 class="display-4 text-danger">Diário</h4>
 <div class="table-responsive ">
         <table class="table table-striped table-sm">

            
             <thead>
  
                <tr>
                  <th>Entrada</th>
  
  <th>Dias</th>
				   <th>Valor</th>
				   <th>Retorno</th>
                  <th>Estado</th>
   <th>Adiocionar</th>
                   
         </tr>
              </thead>
              
<?php 
if(isset($_POST['add'])){
//ROUND id LIMIT 
$addu = $_POST['add'];

$result = "SELECT * FROM sorteiok   WHERE id = '$addu' && id_user = '$id_user' && tipo = 1  ";
  $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);	

	include("fun.dtd.php");
$lumbo = diasQuantd($datai);
 ?>
 	
<tbody>	
		<tr>
<td >  
 <h6  class=" fw-bolder" >    
<?php

 
if ($resulta['key1']  >= 1){
echo $resulta['key1']; 
}else {?>
Sem Dados
<?php 
 }?></h6>
</td>
<td>
 <h6  class=" fw-bolder" >    
<?php
if ($resulta['dias']  >= 1 && $resulta['dias'] <= $resulta['periodo'] ){
echo $dias = $resulta['dias'];
}else {?>
Sem Dados
<?php 
 }?></h6>
</td>    
 <td>
 <h6  class=" fw-bolder" >    
<?php
if ($resulta['valor']  >= 1 && $resulta['valor'] <= ($resulta['rfinal']  +$resulta['key1']  )){
echo $valor = $resulta['valor']; 
}else {?>
Sem Dados
<?php 
 }?></h6>

</td>   
<td>
 <h6  class=" fw-bolder" >    
<?php

echo $resulta['rfinal']; 
?></h6>

</td>

<td>
 <h6  class=" fw-bolder" >    
<?php
// colocar aqui o participar diário e o sacar...
if ($resulta['estado']  >= 1){
echo "Activo";
}else {?>
Sem Dados
<?php 
 }?></h6>

</td>


<td>
	<?php if($resulta['estado']  >= 1 && $resulta['finalidd']== 1 && (($lumbo - $resulta['dias'] + 1)< $resulta['periodo'])){

 ?>
 <h6  class=" fw-bolder" >    
<form  method="POST" action="" 
ajax="true">
	<input type="hidden" name="add" value="<?php echo $resulta['id']  ; ?>" >
<input type="submit" name="ma" value="Mão">
</form>
<?php 
include('mais.php');
}else{
	echo $lumbo - $resulta['periodo']; ?>
	 <h6  class=" fw-bolder" >    
<form  method="POST" action="" 
ajax="true">
  <input type="hidden" name="add" value="<?php echo $resulta['id']  ; ?>" >
<input type="submit" name="ma" value="Mão">
</form>
<?php 
include('mais.php');
  }
?>

</h6>

</td>
        </tr> 

</tbody>          
<?php 

?>

</table>

          </div>		
    	<div class="dropdown-divider"></div>
	<div class="text-center">		

<a href="partk.php"><span class="btn btn-danger ">Cabeça</span></a>


<a href="tabela.php"><span class="btn btn-danger ">Tabela</span></a>
<a href="index.php"><span class="btn btn-danger ">Home</span></a>


<?php 
} else {?>
	<div class="text-center inline">	
<a href="partk.php"><span class="btn btn-danger ">Adicionar</span></a>


		
<a href="tabela.php"><span class="btn btn-danger">Tabela</span></a>
<a href="index.php"><span class="btn btn-danger " >Home</span></a>


<?php }?>
  	<div class="dropdown-divider"></div>
 
<br><br>
	
	<?php


include_once ("copy.php");
?>
