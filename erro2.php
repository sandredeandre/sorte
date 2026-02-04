

<?php
include_once ("header.php");  

?>


<?php

include_once ("menu.php");

?>
<br><br><br>
<div class="row">
<div class="col-3"></div>
<div class="col-6">
<div class=" text-center">

 <nav class="navbar">
	<ul class="nav flex-column">
		 
		  <li class="nav  item">
	Saldo inferior <br>ou não satisfaz, os requesitos para participar.
		 </li>
		 	  <li class="nav  item">
				Contacta, o administrador.
		</li>
		 <ul>
		 </nav>

		 <span class="icon" >
				<i class="bi bi-bank2" data-toggle="modal" data-target="#myModal2"></i>

				</span>
		 <br>
		 <h2 class=" fw-bolder rounded-circle btn btn-danger text-light " 
		 data-toggle="modal" data-target="#myModal2">DEPOSITE, PARA PROCEGUIR
		 
		 
		 </h2>	</div>
</div>
<div class="col-3"></div>
</div></div>
<hr>

<input class="form-control-mt-auto rounded-circle fw-bolder  btn btn-dark text-center" type="submit"  
name="action" onclick="history.back(-4)" 
value="Retroceder" 
>
<?php

include_once ("copy.php");
?>


