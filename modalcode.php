

<div class="modal"  id="cod" tabindex="99999" role="dialog" >
<div class="modal-dialog-scrollable centered" role="document">
<div class="modal-content">
<div class="modal-header ">
<img class="img-card" src="../img/logo.PNG" width="50" height="50" >

 <div class="small fst-italic text-center "> para uma Vida Próspera</div>
<?php
$id_user=$_SESSION['id_user'];
$result = "SELECT * FROM saldo WHERE id_user = '$id_user'  ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$saldofinal=base64_decode($resulta["saldofinal"]);
?>


<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="row">
	<div class="col-3">
<div class="btn-danger fw-bold fst-italic text-center "> Tens <?php 
	$result = "SELECT ideve COUNT FROM sorteioinst WHERE id_user='$id_user' && tipoinst = 10  ";
		$resultado = mysqli_query($conn, $result);
		$registos = mysqli_num_rows($resultado);

echo $registos; ?> registos</div></div>
<div class="col-3"></div><?php 
$result = "SELECT *  FROM saldo WHERE  id_user = '$id_user' ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$resulta =base64_decode($resulta["saldofinal"]);
if ($resulta >= 200){
include ("partinst10.php");
} else {?>
<div class="badge text-danger"> Fundos insuficientes</div>

<?php
}?></div>

<div class="row">
	<div class="col-3"></div><div class="col-6">
<?php

if(!empty($_SESSION['usuarioNiveisAcessoId'] == "3")){

 ?>
<form  method="POST" action="modalcode1.php" >
				<input required  class="form-check-inline-xl w-bolder   text-light btn btn-danger" type="hidden" name="codess"  placeholder="Produto"><br><br>
				

<br>	<br>	<br>
	 <div class="text-center">
				<input required onclick="divEdit()" class="form-control-mt-auto  fw-bolder  btn btn-danger text-center text-light" type="submit" name="resis" value="ok">
				
</div>

<?php
}
if(!empty($_SESSION['usuarioNiveisAcessoId']  == "2" && $saldofinal >= "200")){?>
				


 <div class=" fst-italic text-dark text-center">
    <strong class="display-1">Codicos disponiveis </strong> 
    </div>
<div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Data</th>
				   <th>Evento</th>
                  <th>Sorteio</th>
                   <th>Valor - 10%</th>

                </tr>
              </thead>
			 <tbody>
              				 <?php
              				 $tipoinst = 10;
              if (isset($_SESSION['id_user'] )){
if ($_SESSION['usuarioNiveisAcessoId'] == "2" ) {
 $result = "SELECT * FROM sorteioinstco  ";
 $resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);
$code=0;

?>
		 			  <?php
 while ($resulta = mysqli_fetch_assoc($resultado)) { ?>
				<tr>

				<td> <?php echo ++$code;?></td>
				<td> <?php echo $date = $resulta['date'];?></td>
                <td> <?php echo $ideve = $resulta['ideve'];?></td>
				<td class="fw-bold"> <?php echo $eve = $resulta['eve'];?></td>
				<td> <?php echo $key1 = $resulta['key1'];?></td>
                </tr>
            <?php } ?>

              </tbody>
            </table>
          </div>

<br>
<?php 

}

}
}
?>
</div>
<div class="col-3"></div>
</div>
</div>
</div>

</div>
</div>
</div>


				
