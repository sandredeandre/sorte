

<div class="modal fade"  id="cad" tabindex="-3" role="dialog" >
<div class="modal-dialog-scrollable modal-fullscreen centered" role="document">
<div class="modal-content modal-fullscreen">
<div class="modal-header btn-dark">
<h5 class="fw-bolder  btn-dark text-light" id="mmm">Prencha os campos a baixo </h5>
<button type="button" class="close fw-bolder  btn btn-dark text-danger circle" data-dismiss="modal" aria-label="Fexar">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="text-center">
				<form  method="POST" action="formcad/processa1.php" enctype="multipart/form-data">
				<input required  class="form-check-inline-xl w-bolder   btn btn-info" type="number" name="phone"  placeholder="  Telefone"><br><br>
			<input required  class="form-check-inline-xl w-bolder   btn btn-info" type="text" name="nif"  placeholder="NIF">
			<br><br>
				<input class="form-check-inline-xl fw-bolder  btn btn-info " type="password" name="senha" placeholder=" Senha">
				<input required  class="form-check-inline-xl w-bolder  btn btn-info" type="email" name="email"  placeholder="Email">
			<br>	<br>	<br>
			<input required  class="form-check-inline-xl w-bolder  btn btn-info" type="text" name="nome"  placeholder="Primeiro nome">
			<br><br>
				<input class="form-check-inline-xl fw-bolder  btn btn-info " type="text" name="outronome" placeholder="Segundo Nome">
		<br><br>
			<input required  class="form-check-inline-xl w-bolder   btn btn-info" type="text" name="pai"  placeholder="Nome do Pai">
			<br><br>
				<input class="form-check-inline-xl fw-bolder   btn btn-info " type="text" name="mae" placeholder="Nome da Mãe">
		
				
			<br>	<br>	<br>
				<textarea class="form-check-inline-xl fw-bolder   btn btn-info " type="text" name="gps" >Morada </textarea>
			<br><br>
			<textarea class="form-check-inline-xl fw-bolder   btn btn-info " type="text" name="rua" >Cidade</textarea>
		
				
			<br>	<br>	<br>
			
			
				<input required  class="form-control-mt-auto  fw-bolder  btn btn-dark text-center" type="submit" name="resis" value="Submeter">
				<input required  class="form-control-mt-auto  fw-bolder  btn btn-dark text-center" type="reset" value="Limpar">
				</form>
				
</div>
</div>

</div>
</div>
</div>
<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
