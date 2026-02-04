
<?php
include_once "header.php";
// criar a submissão de password
?>


<?php
if (isset($_SESSION['id_user'])) {
 include_once "menu.php";
}else {
 include_once "blog.php";
}

if (isset($_SESSION['id_user'])) {
 $id_user = $_SESSION['id_user'];
?>
<!-- Fazer a actualização de dados do utilizador -->
<br><div class="row">
<div class="col-2"></div>
<div class="col-10">
<div class="row  featurette">
	<div class="col-4">	 		 <?php
	
 $result_usuario = "SELECT img FROM user WHERE id = '$id_user' LIMIT 1";
 $resultado_usuario = mysqli_query($conn, $result_usuario);
 $resultado = mysqli_fetch_assoc($resultado_usuario);

 if (isset($resultado)) {

?>
			 <div class="text-center">
		<img width="100" class="rounded-circle img-thumbnail" src="img/<?php echo $img = base64_decode($resultado['img']);?>" data-toggle="collapse" data-target="#se" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			 </div>
	  <?php 
}?>
	<br>
		
<strong>Pessoas</strong><div class="dropdown-divider"></div>
              				 <?php

 $result = "SELECT * FROM user WHERE  id = '$id_user' ";
 $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);
 
 if (isset($resulta)) {
  $date  =  base64_decode($resulta['nome']);
  $ideve  = base64_decode($resulta['outronome']);


?>

		<strong>Primeiro</strong><h6> <?php echo $date ?> </h6>
		<strong>Ultimo</strong><h6> <?php echo $ideve ?> </h6>

     <?php 
} ?>
<br>
	<strong>Seguraça </strong><div class="dropdown-divider"></div>
              				 <?php

 $result = "SELECT * FROM user WHERE  id = '$id_user' ";
 $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);

 if (isset($resulta)) {
  $date  = base64_decode($resulta['phone']);
  

?><form  method="POST" action="" >
		 <strong>Telefone</strong> <h6> <?php echo $date ?> </h6>
		<strong><input class="form-check-inline-xl btn btn-danger" type="submit" name="ps" value="Mudar a Senha" ></strong> <h6>
</form>
<?php 
}

if (isset($_POST["ps"])) {?>
<form  method="POST" action="" >
				<input required type="password" class="form-check-inline-xl w-bolder  btn btn-info" type="text" name="senhanv"  placeholder="Nova senha">


				<input required   class="form-control-mt-auto  fw-bolder  btn btn-dark text-center" type="submit" value="ok">
					</form>
					<php? } ?>

 </h6>



<br></div>
	<div class="col-4">

		<strong>Contactos</strong><div class="dropdown-divider"></div>
              				 <?php

 $result = "SELECT * FROM user WHERE  id = '$id_user' ";
 $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);
 
 if (isset($resulta)) {
  $date  = base64_decode($resulta['phone']);
  $ideve  = base64_decode($resulta['email']);
    $code  = $resulta['code'];
?>

		  <strong>Telefone</strong> <h6> <?php echo $date ?> </h6>
		   <strong>E-mail</strong> <h6> <?php echo $ideve ?> </h6>

   <strong>Id </strong> <h6> <?php echo $code ?> </h6>
             <?php 
} ?>
<br>
		<strong>Endereço</strong><div class="dropdown-divider"></div>
		              				 <?php

 $result = "SELECT * FROM user WHERE  id = '$id_user' ";
 $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);

 if (isset($resulta)) {
  $date  = base64_decode($resulta['gps']);
  $date1  = base64_decode($resulta['rua']);
?>

		  <strong>Morada</strong> <h6> <?php echo $date ?> </h6>
		    <strong>Rua</strong> <h6> <?php echo $date1 ?> </h6>

             <?php 
} ?>
<br>

		<strong> Saldo</strong><div class="dropdown-divider"></div>
		 		              				 <?php

 $result = "SELECT * FROM saldo WHERE  id_user = '$id_user' ";
 $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);

 if (isset($resulta)) {

?>

		  <strong>Depositos</strong> <h6> <?php echo $valor = base64_decode($resulta['Valor']); ?> </h6>
		    <strong>Confirmado</strong> <h6> <?php echo $cvalor = base64_decode($resulta['cvalor']); ?> </h6>
            <strong>Saldo disponivel</strong> <h6> <?php echo $sal = base64_decode($resulta['saldofinal']); ?> </h6>


             <?php 
} ?>
<br>


		<strong> Recargas</strong><div class="dropdown-divider"></div>
		 		              				 <?php

 $result = "SELECT * FROM vendasBU WHERE  id_user = '$id_user' ";
 $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);

 if (isset($resulta)) {

?>
<table class="table table-striped table-sm">
	<thead><tr>
		 <td> <strong>Codigo</strong> </td>
		   <td> <strong>Compra</strong> </td>
            <td><strong>Data uso</strong> </td>
                <td><strong>Agente</strong> </td>
</tr></thead>
<tbody>
<tr>
		 <td> <h6> <?php echo $valor = base64_decode($resulta['code_origem']); ?> </h6></td>
		   <td>  <h6> <?php echo $cvalor = base64_decode($resulta['valorc']); ?> </h6></td>
            <td> <h6> <?php echo $sa = $resulta['datauso']; ?> </h6></td>
                <td> <h6> 00<?php if (isset($resulta['id_agent'])){
                	echo $id_agent=$resulta['id_agent'];
$result = "SELECT * FROM user WHERE  id = '$id_agent' ";
 $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);
echo $resulta["code"];
                }; ?> </h6></td>
</tr>
</tbody>
</table>

             <?php 
} ?>
<br><br>

</div>
 <div class="col-4">
 <br>
		<strong>Levantamento</strong><div class="dropdown-divider"></div>
 		              				 <?php

 $result = "SELECT * FROM lev WHERE  id_user = '$id_user'  ";
 $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);
 if (isset($resulta)) {
?>
<table class="table table-striped table-sm">
	<thead><tr>
		 <td> <strong>Confirmado</strong> </td>
		   <td> <strong>Solicitado</strong> </td>
           
</tr></thead>
<tbody>
<tr>
		   <td><h6> <?php echo $conf = base64_decode($resulta ['conf']);?> </h6></td>
		     <td><h6> <?php echo  $lev = base64_decode($resulta['lvt']); ?> </h6></td>
</tr>
</tbody>
</table>

             <?php 
} ?>
<br>
		<strong>Meu banco</strong><div class="dropdown-divider"></div>
 		              				 <?php

 
 $result = "SELECT * FROM payinfo WHERE  id_user = '$id_user'  ";
 $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);

 if (isset($resulta)) {

?>
		 <strong>Banco</strong> <h6> <?php echo  $banco = base64_decode($resulta['Banco']); ?> </h6>
		  <strong>Conta</strong> <h6> <?php echo $conta = base64_decode($resulta['conta']); ?> </h6>
		    <strong>Iban</strong> <h6> <?php echo $iban = base64_decode($resulta['iban']); ?> </h6>
             <?php }
?>
<br>

 </div>
 </div>

  </div></div>
<?php
       

}
if (isset($_POST["senhanv"])){
    //foi substituidada por ea-scrypt
$senhanv = md5($_POST["senhanv"]);

 $id_user = $_SESSION['id_user'];
$result_usuario = "UPDATE user SET senha =  '$senhanv' WHERE user.id = '$id_user' ";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

}

 }


?>
