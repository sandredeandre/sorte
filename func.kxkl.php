<?php
function GetVl (&$valor){ 



 if ( $valor == 200 ){          
echo $valor = 200;
} 

elseif ( $valor == 500 ){
               
echo $valor = 500;
} 
 elseif ($valor == 1000){    
         echo $valor = 1000;
           }
  
     elseif ($valor == 2000){
         echo $valor = 2000;

           }
      elseif ($valor == 5000 ){
          echo $valor = 5000;

           }     
elseif ($valor == 10000 ){
          echo $valor = 10000;

      }
   elseif ($valor == 20000 ){
          echo $valor = 20000; 
 } 
      elseif ($valor == 50000 ){
           echo  $valor = 50000;
           }
      elseif ($valor == 100000){
          echo $valor = 100000;
           }
      elseif ($valor == 1000000  ){
          echo  $valor = 1000000;
}

}  



function Gettipo (&$tipo){ 
 
 if ( $tipo <= 1 ){          
 echo $tipo = "Diário";
}else {               
 echo $tipo = " Único ";
} 

}


function GetPeriodo (&$periodo){ 

if ( $periodo == 32 ){          

echo $periodo = "Mensal";

} 

elseif ( $periodo == 96 ){
               
echo $periodo = "Trimestral";

} 
 elseif ($periodo == 192){    
  echo     $periodo = "Semestral";
        
    }
  
     elseif ($periodo == 384){
     
 echo $periodo = "Anual";

           }
      
}  
