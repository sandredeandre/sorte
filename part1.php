		<?php
		if(!empty($_SESSION['usuarioNiveisAcessoId']=="1")){
			
		?>

<div class="border border-light rounded-50 bg-secondary">
		<form class="form-inline my-2 my-lg-0 " method="POST" action="../sys/psys1.php" ajax="true">
			
<input class="form-check-inline-xl btn btn-lg btn-dark  text-light  text-center fw-bold rounded-pill" type="submit" name="resis1" value="Participar">  
 
<input class="btn btn-lg btn-default text-dark text-center  fw-bold rounded-pill  " type="submit" name="resis1" value="200.00Kz">
		 </form>
</div>
		<?php
		}elseif (!empty($_SESSION['usuarioNiveisAcessoId']=="2"||"3")) {?>
			<div class="border border-light rounded-50 bg-secondary">
		<form class="form-inline my-2 my-lg-0 " method="POST" action="../sys/psys1.php" ajax="true">
			  
<input class="form-check-inline-xl btn btn-lg btn-dark  text-light  text-center fw-bold rounded-pill" type="number" name="telphone" placeholder="Ex: 953408029" maxlength="9" minlength="9" required autofocus>  
 
<input class="btn btn-lg btn-default text-dark text-center  fw-bold rounded-pill  " type="submit" name="resis1" value="Ok">
		 </form>
</div>
		<?php }
		
		?>

