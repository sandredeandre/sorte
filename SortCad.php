
<?php
include_once ("header.php");  

?>


<?php

if(!empty($_SESSION['id_user'])){
include_once  ("menu.php");

}else{
include_once  ("blog.php");

?><br><br>
 <div class=" fst-italic text-dark text-center">
    <strong>Pagina reservada, cria eventos</strong> 
    </div> 
<br><br><br>
<?php
}
include_once ("layout11.php");
?>
<br>

<?php

if(!empty($_SESSION['usuarioNiveisAcessoId'] == "3")){ ?>
<form  method="POST" action="SortCad1.php" >
				<input required  class="form-check-inline-xl w-bolder   text-light btn btn-danger" type="text" name="prodtipo"  placeholder="Produto"><br><br>
				<input required  class="form-check-inline-xl w-bolder text-light  btn btn-danger" type="number" name="keye"  placeholder="Valor"><br><br>
				<input class="form-check-inline-xl fw-bolder   text-light btn btn-danger " type="date" name="datai" placeholder="Data Inicio"><br><br>
				<input required  class="form-check-inline-xl w-bolder  text-light btn btn-danger" type="date" name="dataf"  placeholder="Data Fim"><br><br>
			
				<input class="form-check-inline-xl fw-bolder   text-light btn btn-danger " type="text" name="limit" placeholder="Participantes"><br><br>
				<input class="form-check-inline-xl fw-bolder   text-light  btn btn-danger " type="text" name="pchave" placeholder="Palavras chave">
<br>	<br>	<br>
				<input class="form-control-mt-auto fw-bolder  text-light btn btn-danger " type="file" name="img" placeholder="Imagem">


<br>	<br>	<br>
	 <div class="text-center">
				<input required onclick="divEdit()" class="form-control-mt-auto  fw-bolder  btn btn-danger text-center text-light" type="submit" name="resis" value="ok">
				<input required  class="form-control-mt-auto  fw-bolder  btn btn-danger text-center text-light" type="reset" name="resis" value="Limpar">
				</form>
</div>

<?php
}else{?>
				


 <div class=" fst-italic text-dark text-center">
    <strong class="display-1">Pagina reservada</strong> 
    </div>

<br>
<?php 
include_once ("retr.php");
}

include_once ("layout1.1.php"); 
include_once ("copy.php");

?>





				
