<?php
include_once ("header.php");  

if(isset($_SESSION['id_user'])){
  
include ("menu.php");
}else{
include_once ("blog.php");
}
?>


  <strong class="text-center">365 - Retornos</strong>



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
   
                      <th>Corridos</th>
                           <th>Actualizar</th>
         </tr>
              </thead>
   <tbody>            
<?php 
//ROUND id LIMIT 1
$result = "SELECT * FROM sorteiok   WHERE id_user = '$id_user' && tipo = 2   ORDER BY id DESC";
  $resultado = mysqli_query($conn, $result);
 

            while($resulta = mysqli_fetch_assoc($resultado)){ 

  
 ?>
  

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
if ($resulta['rfinal'] >=  $resulta['valor']  && $resulta['finalidd'] == 1  && $resulta['estado'] ==  1){
echo Vencido;
// up saldo
$key1 = $resulta['rfinal']; 
 $result = "UPDATE saldo SET saldofinal =  saldofinal - '$key1'  WHERE saldo . id_user = '$id_user' ";
 $resultado = mysqli_query($conn, $result);
 $id = $resulta['id']; 
   $result = "UPDATE sorteiok SET finalidd =  0 estado = 0 WHERE sorteiok . id_user = '$id_user' AND sorteiok.id = '$id' ";
 $resultado = mysqli_query($conn, $result);
 
}elseif($resulta['rfinal'] >=  $resulta['valor']  && $resulta['finalidd'] == 0  && $resulta['estado'] ==  0){
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
if ($resulta['finalidd'] == 0  && $resulta['estado'] ==  0){
echo "DeActivo";
}
?></h6>

</td>
<td>

 <h6  class=" fw-bolder" >    
<form  method="POST" action="tabelaRr.php"
ajax="true">
  <input type="hidden" name="addu" value="<?php echo $resulta['id']  ; ?>" >
<input type="submit" name="ma" value="Ver">
</form>

</h6>

</td>
        </tr> 


<?php }?>
</tbody>          
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
   
   <th>Actualizar</th>
         </tr>
              </thead>
              <tbody>
<?php $result = "SELECT * FROM sorteiok   WHERE id_user = '$id_user' && tipo = 1 ORDER BY id DESC";
  $resultado = mysqli_query($conn, $result);
 

            while($resulta = mysqli_fetch_assoc($resultado)){ 

 ?>
  
 
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

 <h6  class=" fw-bolder" >    
<form  method="POST" action="tabelaRr.php"
ajax="true">
  <input type="hidden" name="add" value="<?php echo $resulta['id']  ; ?>" >
<input type="submit" name="ma" value="Ver">
</form>

</h6>

</td>
        </tr> 

         
<?php }?>
</tbody> 
</table>

          </div>  
          
<?php 
} ?>


  
 <div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
  
                <tr>
                  <th>Entrada</th>
  
  
           <th scope="col 4">Dias</th>
             
         </tr>
              </thead>
             <thead>
  
                <tr>
                  <th></th>
  
  <th>30</th>
           <th>90</th>
                  <th>183</th>
                   <th>366</th>
         </tr>
              </thead>
       <tbody>
    
        <tr>
 <td >200 </td>
<td>12000 </td>
<td>24000 </td>
<td>36000 </td>          
<td>73200 </td>

</tr> 
          <tr>
          <td >500 </td>
<td>30000 </td>
<td>60000 </td>
<td>90000 </td>          
<td>183000 </td>

          </tr> 
    <tr>
<td >  1000 </td>

<td>60000 </td>
<td>120000 </td>
<td>180000 </td>          
<td>366000 </td>
         </tr>        
      
    <tr>
          <td >2000 </td>
<td>120000</td>
<td>240000 </td>
<td>360000 </td>          
<td>732000 </td>
         </tr>       

    <tr>
          <td >5000 </td>
<td>300000 </td>
<td>300000 </td>
<td>900000 </td>          
<td>1830000 </td>
          </tr>            
    <tr>
          <td  >10000 </td>
<td>600000 </td>
<td>1200000 </td>
<td>1800000 </td>          
<td> 3660000</td>
        </tr> 
    <tr>
         <td >20000 </td>
<td>1200000 </td>
<td>2400000 </td>
<td>3600000</td>          
<td>7320000</td>

          </tr> 
    <tr>
        <td  >50000 </td>

<td>3000000</td>
<td>6000000</td>
<td>18000000</td>          
<td>36600000</td>

          </tr> 
    <tr>
         <td >100000 </td>
<td>6000000</td>
<td>12000000</td>
<td>18000000</td>          
<td>36600000 </td>

          </tr>  

    <tr>
    <td >  1000000 </td>
<td>60000000</td>
<td>120000000</td>    
 <td>180000000 </td>   
<td>366000000</td>

        </tr> 

</tbody>
            </table>

          </div>    
  <div class="text-center">   
<a href="partk.php"><span class="btn btn-danger ">Participar</span></a>

<a href="tabelaRr.php"><span class="btn btn-danger">Resultados</span></a>

</div>
<br>
  <br> <br>   <br> <br> 

  
  <?php

include_once ("copy.php");

?>
