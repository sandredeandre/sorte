
<META HTTP-EQUIV = "REFRESH" CONTENT="60";URL="index1.php">

<?php
include_once ("header.php");

if (isset($_SESSION['id_user'])) {

 include_once "menu.php";
}else {
 include_once "blog.php";
}include_once ("layout11.php");
?>
 <br><br><br>

<div class="dropdown-divider"></div>
<div class="text-center">

       <strong class="small">365 - Cabeça nova</strong>
</div>
  

  	<div class="dropdown-divider"></div>


		<?php
if (isset($_POST['resis'])) {
 include ("psysk.php");
}else {

 if (isset($_SESSION['id_user'])) {

?>

		<form class="form-control-mt-2" method="POST" action=" " ajax="true">
<div class="text-center">
<fieldset class="fieldset"  required>
<label class="form-label" required>Entradas</label>
<div class="card-header">
<br>
 <select class=" form-control mt-auto " name="valor" required>
<option value="200">200</option>
<option value="500">500</option>
<option value="1000">1000</option>
<option value="2000">2000</option>
<option value="5000">5000</option>
<option value="10000">10000</option>
<option value="20000">20000</option>
<option value="50000">50000</option>
<option value="100000">100000</option>
<option value="1000000">1000000</option>
</select>
<br>
</div>

<label class="form-label" required>Moldes</label>
<div class="card-header">
<br>
<select class=" form-control mt-auto" name="tipo" required>
<option value="1">Diário</option>
<option value="2">Único</option>
</select>
<br>
<label class="form-label" required> Duração</label>
<div class="card-header">
<br>
<select class="form-control mt-auto" name="periodo" required>
<option value="32">Mensal</option>
<option  value="96">Trimestral </option>
<option value="192">Semestral </option>
<option value="384">Anual </option>
</select>
<br>
</div>
</fieldset>

<br>

		<input class="btn btn-lg btn-dark rounded-circle text-light  text-center fw-bold rounded-pill" type="submit" name="resis" value="ok"

>
</div>
	</form>
<?php


 }
}

?>
<input class="form-control-mt-auto  fw-bold rounded-piller  btn btn-dark text-center" type="submit"
name="action" onclick="history.back(-1)"
value="Retroceder"
>

  	<div class="dropdown-divider"></div>





	<?php
include_once ("layout1.1.php");
include_once "copy.php";

?>
