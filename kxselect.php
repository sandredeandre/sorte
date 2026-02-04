<?php
include_once ("header.php");  

if(isset($_SESSION['id_user'])){
	
include ("menu.php");
}else{
include_once ("blog.php");
}
?>

     <br><br><br><br> 
     	<div class="dropdown-divider"></div>
     	<div class="card-header">
     	<div class="text-center">  <strong>Diario</strong></div>
</div>

	<div class="dropdown-divider"></div>
<?php if(isset($_SESSION['id_user'])){?>
	 <div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
       <tr class="text-center">
            Dias				   
                </tr>
                <tr>
                  <th class=" badge text-danger">Entradas</th>
                  <th>30</th>
				   <th>90</th>
                  <th>183</th>
                   <th>366</th>
				   
                </tr>
<th> Participar</th>
              </thead>
			 <tbody>
    
				<tr>
 <td class=" badge">200 </td>
<td><?php 	include ('inc.cs.php'); 
 
 include ("inc.select.php");?></td>
<td>  <?php
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 200 AND tipo = Diario";
 include ("inc.select.php");?></td>
</tr> 
      		<tr>
         	<td  class=" badge>500 </td>
<td><?php  	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 
 500 AND tipo =  Diario";
include ("inc.select.php");?> </td> 
</tr> 
		<tr>
<td  class=" badge>  1000 </td>

<td><?php 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 
 1000 AND tipo = Diario";

 include ("inc.select.php");?> </td>
        </tr>        
    <?php  include ("inc.select.php"); ?>
		<tr>
         	<td  class=" badge>2000 </td>
<td><?php 
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 =  2000 AND tipo = Diário";
include ("inc.select.php");?></td>
<td><?php include ("inc.select.php");?> </td> </tr>       

		<tr>
         	<td  class=" badge>5000 </td>
<td><?php

 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 
 5000  AND tipo = Diario";
 include ("inc.select.php");?> </td>
<td><?php include ("inc.select.php");?> </td>
          </tr>            
		<tr>
         	<td  class=" badge>10000 </td>
<td><?php    	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 
 10000 AND tipo = Diario";
include ("inc.select.php");?> </td>
          </tr> 
		<tr>
         <td  class=" badge>20000 </td>
<td><?php
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 =  20000 AND tipo = Diario";
 include ("inc.select.php");?> </td>

          </tr> 
		<tr>
        <td  class=" badge>50000 </td>

<td><?php 
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 =  50000 
AND tipo = Diario"; 
include ("inc.select.php");?></td>
     </tr> 
		<tr>
         <td  class=" badge>100000 </td>
<td><?php 
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 =  100000  AND tipo = Diario";
 include ("inc.select.php");?></td>
          </tr>  

		<tr>
    <td  class=" badge>  1000000 </td>
<td><?php 
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 1000000  AND tipo = Diario";

include ("inc.select.php");?></td>
        </tr> 
<td> <a type="button" href="partk.php"></a>
</td>
</tbody>
            </table>

          </div>		
			

       <br>  <strong>Unica</strong>

	 <div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
       <tr  class="text-center">
            Dias				   
                </tr>
                <tr>
                  <th class=" badge text-danger>Entradas</th>
                  <th>30</th>
				   <th>90</th>
                  <th>183</th>
                   <th>366</th>
				   
                </tr>
<th> Participar</th>
              </thead>
			 <tbody>
    
				<tr>
 <td class=" badge">200 </td>
<td><?php 	include ('inc.cs.php'); 
 
 include ("inc.select.php");?></td>
<td>  <?php
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 200 AND tipo = Única";
 include ("inc.select.php");?></td>
</tr> 
      		<tr>
         	<td  class=" badge>500 </td>
<td><?php  	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 
 500";
include ("inc.select.php");?> </td> 
</tr> 
		<tr>
<td  class=" badge>  1000 </td>

<td><?php 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 
 1000";

 include ("inc.select.php");?> </td>
        </tr>        
      
		<tr>
         	<td  class=" badge>2000 </td>
<td><?php 
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 =  2000";
include ("inc.select.php");?></td>
<td><?php include ("inc.select.php");?> </td> </tr>       

		<tr>
         	<td  class=" badge>5000 </td>
<td><?php

 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 
 5000";
 include ("inc.select.php");?> </td>
<td><?php include ("inc.select.php");?> </td>
          </tr>            
		<tr>
         	<td  class=" badge>10000 </td>
<td><?php    	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 
 10000";
include ("inc.select.php");?> </td>
          </tr> 
		<tr>
         <td  class=" badge>20000 </td>
<td><?php
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 =  20000";
 include ("inc.select.php");?> </td>

          </tr> 
		<tr>
        <td  class=" badge>50000 </td>

<td><?php 
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 =  50000"; include ("inc.select.php");?></td>
     </tr> 
		<tr>
         <td  class=" badge>100000 </td>
<td><?php 
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 =  100000";
 include ("inc.select.php");?></td>
          </tr>  

		<tr>
    <td  class=" badge>  1000000 </td>
<td><?php 
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 1000000";

include ("inc.select.php");?></td>
        </tr> 
<td> <a type="button" href="partk.php"></a>
</td>
</tbody>
            </table>

          </div>		
			


	
	<?php
}
include_once ("copy.php");

?>
