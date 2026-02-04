<?php
function GetVlN (&$valorn){ 


 if ( $valorn == 200 ){          
 	
$valorn = 200;
} 

elseif ( $valorn == 500 ){
               
$valorn= 500;
} 
 elseif ($valorn == 1000){    
          $valorn = 1000;
           }
  
     elseif ($valorn == 2000){
          $valorn = 2000;

           }
      elseif ($valorn == 5000 ){
          $valorn = 5000;

           }     
elseif ($valorn == 10000 ){
          $valorn = 10000;

      }
   elseif ($valorn == 20000 ){
          $valorn = 20000; 
 } 
      elseif ($valorn == 50000 ){
           $valorn = 50000;
           }
      elseif ($valorn == 100000){
          $valorn = 100000;
           }
      elseif ($valorn == 1000000  ){
          $valorn = 1000000;
}
return $valorn;
}  


function GettipoN (&$tipon){ 

 if ( $tipon == 1 ){          
 $tipon = 1;
}else {             
 $tipon = 2;
} 
return $tipon;
}
// função
function GetPeriodoN (&$periodon){ 
	

if ( $periodon == 32 ){          

$periodon = 32;

} 

elseif ( $periodon == 96 ){
               

$periodon  = 96;

} 
 elseif ($periodon == 192){    
  $periodon = 192;
        
    }
  
     elseif ($periodon == 384){
     
$periodon = 384;

           }
           return $periodon;
           
}  ?>
