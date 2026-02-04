		<?php
		if(isset($_SESSION['id_user'])){
			
		?>


		<form class="form-inline my-2 my-lg-0 " method="POST" action="../sys/psysinst10.php" ajax="true">
			<div class="text-center">
			 	<input class="form-check-inline text-light btn  btn-dark  text-center fw-bold rounded-pill rounded-pill" type="number" name="resisoff" value="Codigo" placeholder="Cola o codigo"> 
<input class="form-check-inline text-light btn  btn-dark  text-center fw-bold rounded-pill rounded-pill" type="number" name="telphone" placeholder="Ex: 953408029" maxlength="9" minlength="9" required autofocus>  
 
<input class="form-check-inline-xl btn  btn-dark  text-light  text-center fw-bold rounded-pill rounded-pill" type="submit" value="Ok">  
 <?php if ($_SESSION['usuarioNiveisAcessoId']== "3" OR "2" ) {?>
<span class="form-check-inline-xl btn  btn-dark  text-light  text-center fw-bold rounded-pill rounded-pill"  data-toggle="modal" data-target="#cod">Codes
</span>
<?php }?>
</div>
		</form>

		<?php
		}
	include_once 'modalcode.php';	
		?>
