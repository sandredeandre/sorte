<div class="modal fade"  id="info" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-fullscreen" role="document">
<div class="modal-content">
<div class="modal-header btn-dark ">
<h5 class="fw-bolder   text-light" id="exampleModalLongÂ­Title">Politicas & Privacidade</h5>
<button type="button" class="close fw-bolder  btn btn-dark text-danger circle" data-dismiss="modal" aria-label="Fexar">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

			<?php 



$result_usuario = "SELECT * FROM winbackup LIMIT 30";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$resultado = mysqli_fetch_assoc($resultado_usuario);

if (isset($resultado)) {
 $id_user = $resultado['id_user'];

 $data = $resultado['date'];
 $eve = $resultado['eve'];
 $saldo = $resultado['key1'];
?>
			<div class="dropdown-divider"></div>
			<strong>Utilizador: </strong>00app<?php echo $id_user; ?>
			<div class="dropdown-divider"></div>
			<strong>Codigo: </strong>  <?php echo $eve; ?>
			<div class="dropdown-divider"></div>
		<strong>Valor: </strong>  <?php echo $saldo; ?>
		<div class="dropdown-divider"></div>
	<strong>Data: </strong>  <?php echo $data; ?>
<div class="dropdown-divider"></div>

		<?php


}
include "4div.php";
?>
	<div class="modal fade"  id="info1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-fullscreen" role="document">
<div class="modal-content">
<div class="modal-header btn-dark ">
<h5 class="fw-bolder   text-light" id="exampleModalLongÂ­Title">Segurança</h5>
<button type="button" class="close fw-bolder  btn btn-dark text-danger circle" data-dismiss="modal" aria-label="Fexar">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

			<?php



$result_usuario = "SELECT * FROM winbackup WHERE id_user  LIMIT 30";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$resultado = mysqli_fetch_assoc($resultado_usuario);

if (isset($resultado)) {
 $id_user = $resultado['id_user'];

 $data = $resultado['date'];
 $eve = base64_decode($resultado['eve']);
 $saldo = $resultado['key1'];
?>
			<div class="dropdown-divider"></div>
			<strong>Utilizador: </strong>00app<?php echo $id_user; ?>
			<div class="dropdown-divider"></div>
			<strong>Codigo: </strong>  <?php echo $eve; ?>
			<div class="dropdown-divider"></div>
		<strong>Valor: </strong>  <?php echo $saldo; ?>
		<div class="dropdown-divider"></div>
	<strong>Data: </strong>  <?php echo $data; ?>
<div class="dropdown-divider"></div>

		<?php


}
include "4div.php";
?>
	<div class="modal fade"  id="info2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-fullscreen" role="document">
<div class="modal-content">
<div class="modal-header btn-dark ">
<h5 class="fw-bolder   text-light" id="exampleModalLongÂ­Title">Carregar a conta</h5>
<button type="button" class="close fw-bolder  btn btn-dark text-danger circle" data-dismiss="modal" aria-label="Fexar">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

			<?php



$result_usuario = "SELECT * FROM winbackup WHERE id_user  LIMIT 30";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$resultado = mysqli_fetch_assoc($resultado_usuario);

if (isset($resultado)) {
 $id_user = $resultado['id_user'];

 
 $data = $resultado['date'];
 $eve = base64_decode($resultado['eve']);
 $saldo = $resultado['key1'];
?>
			<div class="dropdown-divider"></div>
			<strong>Utilizador: </strong>00app<?php echo $id_user; ?>
			<div class="dropdown-divider"></div>
			<strong>Codigo: </strong>  <?php echo $eve; ?>
			<div class="dropdown-divider"></div>
		<strong>Valor: </strong>  <?php echo $saldo; ?>
		<div class="dropdown-divider"></div>
	<strong>Data: </strong>  <?php echo $data; ?>
<div class="dropdown-divider"></div>

		<?php


}
include "4div.php";
?>
	<div class="modal fade"  id="info3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-fullscreen" role="document">
<div class="modal-content">
<div class="modal-header btn-dark ">
<h5 class="fw-bolder   text-light" id="exampleModalLongÂ­Title">Levantamento</h5>
<button type="button" class="close fw-bolder  btn btn-dark text-danger circle" data-dismiss="modal" aria-label="Fexar">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

			<?php



$result_usuario = "SELECT * FROM winbackup WHERE id_user  LIMIT 30";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$resultado = mysqli_fetch_assoc($resultado_usuario);

if (isset($resultado)) {
 $id_user = $resultado['id_user'];

 $data = $resultado['date'];
 $eve = base64_decode($resultado['eve']);
 $saldo = $resultado['key1'];
?>
			<div class="dropdown-divider"></div>
			<strong>Utilizador: </strong>00app<?php echo $id_user; ?>
			<div class="dropdown-divider"></div>
			<strong>Codigo: </strong>  <?php echo $eve; ?>
			<div class="dropdown-divider"></div>
		<strong>Valor: </strong>  <?php echo $saldo; ?>
		<div class="dropdown-divider"></div>
	<strong>Data: </strong>  <?php echo $data; ?>
<div class="dropdown-divider"></div>
		<div class="dropdown-divider"></div>



		<?php


}
include "4div.php";
?>
	<div class="modal fade"  id="info4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-fullscreen" role="document">
<div class="modal-content">
<div class="modal-header btn-dark ">
<h5 class="fw-bolder   text-light" id="exampleModalLongÂ­Title">Vencedores</h5>
<button type="button" class="close fw-bolder  btn btn-dark text-danger circle" data-dismiss="modal" aria-label="Fexar">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

			<?php



$result_usuario = "SELECT * FROM winbackup WHERE id_user  LIMIT 30";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$resultado = mysqli_fetch_assoc($resultado_usuario);

if (isset($resultado)) {
 $id_user = $resultado['id_user'];
  		
 $data = $resultado['date'];
 $eve = base64_decode($resultado['eve']);
 $saldo = $resultado['key1'];
?>
			<div class="dropdown-divider"></div>
			<strong>Utilizador: </strong>00app<?php echo $id_user; ?>
			<div class="dropdown-divider"></div>
			<strong>Codigo: </strong>  <?php echo $eve; ?>
			<div class="dropdown-divider"></div>
		<strong>Valor: </strong>  <?php echo $saldo; ?>
		<div class="dropdown-divider"></div>
	<strong>Data: </strong>  <?php echo $data; ?>
<div class="dropdown-divider"></div>	
  		


<?php


}
include "4div.php";
?>
	<div class="modal fade"  id="info5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-fullscreen" role="document">
<div class="modal-content">
<div class="modal-header btn-dark ">
<h5 class="fw-bolder   text-light" id="exampleModalLongÂ­Title">Investidores</h5>
<button type="button" class="close fw-bolder  btn btn-dark text-danger circle" data-dismiss="modal" aria-label="Fexar">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body modal-fullscreen">

			<?php



$result_usuario = "SELECT * FROM winbackup WHERE id_user  LIMIT 30";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$resultado = mysqli_fetch_assoc($resultado_usuario);

if (isset($resultado)) {
 $id_user = $resultado['id_user'];
 
 $data = $resultado['date'];
 $eve = base64_decode($resultado['eve']);
 $saldo = $resultado['key1'];
?>
			<div class="dropdown-divider"></div>
			<strong>Utilizador: </strong>00app<?php echo $id_user; ?>
			<div class="dropdown-divider"></div>
			<strong>Codigo: </strong>  <?php echo $eve; ?>
			<div class="dropdown-divider"></div>
		<strong>Valor: </strong>  <?php echo $saldo; ?>
		<div class="dropdown-divider"></div>
	<strong>Data: </strong>  <?php echo $data; ?>
<div class="dropdown-divider"></div>	

	
		
			<?php


}
include "4div.php";

?>


