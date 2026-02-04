<div class="modal fade"  id="myModal2" tabindex="-2" role="dialog" >
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content text-dark">
<div class="modal-header btn-danger">
<h5 class=" fw-bolder  btn-danger text-light" id="myModal1">Carregar o comprovativo</h5>
<button type="button" class="close fw-bolder  btn btn-danger text-danger circle" data-dismiss="modal" aria-label="Fexar">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

				<form class="form-inline my-2 my-lg-0 " method="POST" action="msys.php"    enctype="multipart/form-data">
			<div class="card-header">
			<br>
				<input class="form-control-mt-auto w-bolder text-dark  btn btn-danger" type="number" name="Valor"  required value="Motante">
				<br><br>
				<input class="form-control-lg w-bolder text-dark btn btn-danger" type="file" name="cfile" required value="Comprovativo">
				<br><br>
				</div>
				<input class="form-control-mt-auto w-bolder text-dark  btn btn-danger " type="submit"value="Depositar">
				</form>	
			
				<?php
include ("4div.php");?>
