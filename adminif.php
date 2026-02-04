<?php
include_once "header.php";

if (isset($_SESSION['id_user'])) {
 
 include ("menu.php");
}else {
	
 include_once ("blog.php");
}
?>
  <?php
include ("vermenu.php");
include ("main.php");
//mudar id por code
 $result = "SELECT * FROM user ";
 $resultado = mysqli_query($conn, $result);
?>
     <br>  <strong>Sorteiados</strong>

	 <div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>My ID</th>
                  <th>Data</th>
				   <th>Evento</th>
                  <th>Sorteio</th>
                   <th>Valor - 10%</th>

                </tr>
              </thead>
			 <tbody>
              				 <?php
              if (isset($_SESSION['id_user'] )){
if ($_SESSION['usuarioNiveisAcessoId'] == "2" or "3") {
 $result = "SELECT * FROM winner ";
 $resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);
$_SESSION['code']=$resulta['code'];
?>
		 			  <?php
 while ($resulta = mysqli_fetch_assoc($resultado)) { ?>
				<tr>

				<td> <?php echo $idm = $_SESSION['code'];?></td>
				<td> <?php echo $date = $resulta['date'];?></td>
                <td> <?php echo $ideve = $resulta['ideve'];?></td>
				<td> <?php echo $eve = $resulta['eve'];?></td>
				<td> <?php echo $key1 = $resulta['key1'];?></td>
                </tr>
            <?php } ?>

              </tbody>
            </table>
          </div>

	 <?php } ?>

 <strong>Sorteio</strong>

	 <div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>My ID</th>
                  <th>Data</th>
				   <th>Evento</th>
                  <th>Sorteio</th>
                   <th>Valor - 10%</th>

                </tr>
              </thead>
			 <tbody>
              				 <?php
if ($_SESSION['usuarioNiveisAcessoId'] == 2  or "3") {
 $result = "SELECT * FROM sorteio ";
 $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);
?>
		 		  <?php
 while ($resulta = mysqli_fetch_assoc($resultado)) { ?>
				<tr>

				<td> <?php echo $id_user = $_SESSION['code'];?></td>
				<td> <?php echo $date = base64_decode($resulta['date']);?></td>
                <td> <?php echo $ideve = base64_decode($resulta['ideve']);?></td>
				<td> <?php echo $eve = base64_decode($resulta['eve']);?></td>
				<td> <?php echo $key1 = base64_decode($resulta['key1']);?></td>
                </tr>
            <?php } ?>

              </tbody>
            </table>
          </div>

	 <?php } ?>
     <strong>Saldo</strong>

	 <div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>My ID</th>
                  <th>Valor</th>
				   <th>Ficheiro</th>
                  <th>Regarcas direitas</th>
                   <th>Saldo</th>

                </tr>
              </thead>
			 <tbody>
              				 <?php
if ($_SESSION['usuarioNiveisAcessoId'] == 2  or "3"  or "3") {
 $result = "SELECT * FROM saldo ";
 $resultado = mysqli_query($conn, $result);

?>

					  <?php
 while ($resulta = mysqli_fetch_assoc($resultado)) { ?>
				<tr>

				<td> <?php  $id_user = $_SESSION['code'];?></td>
				<td> <?php echo $Valor = base64_decode($resulta['Valor']);?></td>
                <td> <?php echo $cfile = base64_decode($resulta['cfile']);?></td>
				<td> <?php echo $cvalor = base64_decode($resulta['cvalor']);?></td>
				<td> <?php echo $saldofinal = base64_decode($resulta['saldofinal']); ?></td>
                </tr>
            <?php } ?>
              </tbody>
            </table>
          </div>
	 <?php } ?>
	<strong>Levantamentos</strong>
     <div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>My ID</th>
                  <th>Confirmar</th>
				   <th>Valor</th>
                </tr>
              </thead>
			 <tbody>
              				 <?php
if ($_SESSION['usuarioNiveisAcessoId'] == 2  or "3") {
 $result = "SELECT * FROM lev ";
 $resultado = mysqli_query($conn, $result);
 ?><?php
 while ($resulta = mysqli_fetch_assoc($resultado)) { ?>
				<tr>
    <td> <?php echo $isso = $_SESSION['code'];?></td>
				<td> <?php echo $mom = base64_decode($resulta['conf']);?></td>
                <td> <?php echo $nomnen = base64_decode($resulta['lvt']);?></td>
                </tr>
            <?php } ?>

              </tbody>
            </table>
          </div>
		 <?php } ?>

	<?php
include_once ("sort.php");
}else{
	include_once ("retr.php");
	}
include_once ("copy.php");

?>
