
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
 

<br>
<?php
include_once ("layout.php");  
include_once ("tabela.php");
include ("partk.php");
 
include_once ("tabela.php"); 
include_once ("layout1.php");  
?>








<?php

include_once ("erro1.php");
include_once ("copy.php");


?>



	
	
	

	

	
	

	
		
