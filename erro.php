

<?php
include_once ("header.php");  

?>


<?php
if(isset($_SESSION['id_user'])){
	

include ("menu.php");
}else{
include_once ("blog.php");
}
?>
<br><br><br><br> 
<div class="row">
<div class="col-3"></div>
<div class="col-6">
<div class=" text-center">
 
		 <nav class="navbar">
		 <ul class="nav flex-column">
		 
		  <li class="nav  item">
		 		Saldo inferior ou não satisfaz, os requesitos para levantar.
		 </li>
		 		 <li class="nav  item">
				Aguarda, o administrador.
		</li>
		 <ul>
		 </nav>
		 <span class="icon" >
				<i class="bi bi-cash-coin" data-target="#index.php"></i>

				</span>
		 <br>
		 <h2 class=" fw-bolder  btn btn-info text-light " 
		 >SEM VALORES, PARA PROCEGUIR
		 
		 
		 </h2>	</div>
</div>
<div class="col-3"></div>
</div>

<input class="hidden" type="submit"  
name="action" onclick="history.back(-2)" value="Retroceder" >

<?php
include_once ("copy.php");
?>
