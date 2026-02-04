

<?php
include_once ("header.php");  

?>


<?php

include_once ("menu.php");

?>
<br><br>
<nav class="nav-tabs navbar-expand-lg navbar-danger btn-danger">
</nav>
<div class="row">
<div class="col-3"></div>
<div class="col-6">

<div class=" text-center">
 
		 <nav class="navbar">
		 <ul class="nav flex-column">
		 <li class="nav  item"> <h2 class="badge fw-bolder   bg-danger text-light " 
		 > Não pode participar por enqunanto.		 
		 </h2></li>
			
			 <li class="nav  item">
	Saldo inferior ou não satisfaz, os requesitos para participar.
		 </li>
		
		 		 <li class="nav  item">
				Aguarda, o administrador.
		</li>
		 <ul>
		 </nav>
		 <span class="icon" >
				<i class="bi bi-person-x-fill" ></i>

				</span>
		 <br>
		 	</div>


  	
		 </div>
<div class="col-3"></div>
</div>

<input class="hidden" type="submit"  
name="action" onclick="history.back(-2)" value="Retroceder" >
<?php

include_once ("copy.php");
?>


