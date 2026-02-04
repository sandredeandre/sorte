	<?php	$resultado = mysqli_query($conn, $result);
		while($resulta = mysqli_fetch_assoc($resultado)){ ?>
		
		
		
		<ul class="list-group">
		<li class="list-group-item list-group-horizontal" data-toggle="modal" data-target="#jogo" > SALA DE 
		<?php echo $resulta ['Valor'];?>
		
		</li>
		<li class="progress" data-toggle="modal" data-target="#jogo" >
			<li class="offcanvas" data-toggle="modal" data-target="#jogo" >
		
		</li> 
		</li> 
		 
		
		</ul><?php
} 						
?>
<div class="dropdown-divider"></div>

<div class="modal fade"  id="jogo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog-scrollable modal-fullscreen" role="document">
<div class="modal-content">



<div class="modal-body-dark">

<i class="bi bi-arrow-bar-up  fw-bolder  btn btn-dark text-danger circle" data-dismiss="modal" aria-label="Fexar"></i> 
			<nav class="nav-tabs navbar-expand-lg navbar-danger btn-danger">
</nav>	
		<img  class="w-100 rounded-2 sticky"  src="cartas/1.PNG">
		
	<div class="progress-bar-warning" >
<div class="progress-bar-striped" >
	ºlº

</div>
</div>

	
	
	
	
			</div></div></div></div>
