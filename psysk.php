<?php
if (isset($_SESSION['id_user'])){
	
?>
<META HTTP-EQUIV = "REFRESH" CONTENT="60";URL="tabelaRr.php">

<strong class="fw-bolder ">Retornos</strong>

	    <div class="card">

<?php



include_once ("gcu.php"); 
include_once ("ecode.php");


if (!empty($_POST['valor']) OR ($_POST['tipo'])){

 $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);
$valorn = $valor;

$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
$tipon = $tipo;
 $periodo = filter_input(INPUT_POST, 'periodo', FILTER_SANITIZE_STRING);
 $periodon =  $periodo;
include ("func.kxkl.php");
include ("func.kxkl.num.php");
?>

<div class="card">
<h6 >
	 <div class="table-responsive ">
		
            <table class="table table-striped table-sm">
<tr><th>
<h6 >Codigo </th><th><div class="badge small text-light"><?php 
	$result = "SELECT * FROM sorteiok WHERE id_user = '$id_user'  ORDER BY id DESC LIMIT 1";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
if (!empty($resulta['[ideve'])){
echo $resultat = $resulta['ideve'] + 1;
$_SESSION['resultat']=$resultat ;
}else {

echo $resultat = gerarCU();
$_SESSION['resultat']=$resultat ;
}

 


?></div>
</th>
</tr><tr><th>
Valor</th><th>

 <div class=" badge fw-bolder   text-light"><?php

  
echo $_SESSION['valory']=GetVl ($valor);
?>,00 AOA</div>
</th>
</tr>
<tr><th>
Tipo </th><th><div class=" badge small text-light "><?php

echo $tipof = Gettipo ($tipo);

?></div>
<tr><th>
Período </th><th><div class=" badge small text-light"><?php
echo  $periodof = GetPeriodo ($periodo);
global $periodof;
?></div>
</th>
</tr>
<tr><th>
Evento </th><th><div class=" badge small initialism text-light "><?php 
echo  $resultados1 = gerarCodigoUnico();?>
 - 
<?php
echo   $resultados2 = gerarCodigoUnico();
;
  
?></div></th>
</tr>
<tr><th>
Cabeça</th><th><div class=" badge small text-light"><?php

$tipon = GettipoN($tipon);
$_SESSION['tipon'] =$tipon ;
$tipon = $_SESSION['tipon'];
$per = (GetPeriodoN($periodon));
	$_SESSION["periodon"]=$per;

if ($tipon == 1){
	echo $vt =  GetVlN($valorn);
	$_SESSION["vt"]=$vt;
}else{
	
	$vll = (GetVlN ($valorn));
echo $vt = $per *  $vll;
$_SESSION["vt"]=$vt;

}
$vt = $_SESSION["vt"];
;?>,00 AOA</div></th>
</tr>

</h6>
<div class="breadcrumb">
<div class=" text-center ">
<strong class="fw-bolder  text-center "> <?php
 $pert = (25 / $vt) * 100;
 
if ($tipon <= 1){
	$vt =$_SESSION["vt"];
	echo $vtr = $vt * 2 - $pert;
	$_SESSION["vtr"]=$vtr;
}else{
echo $vtr =  (($per - 2) *  $vll) * 2 - $pert;
//global $vtr;
$_SESSION["vtr"]=$vtr;
}
;?> AOA em <?php 
if ($tipon <= 1){
echo 1;
}else{
echo $pern = GetPeriodoN($periodon); }  ?> dia/s
</strong>
</div>
</div>
<div class=" text-center" >
<h5 class="fw-bolder text-danger strong"    >Dados acreditar</h5>
</div>
</table>
</div>
</div>

<div class="breadcrumb">

 <?php

echo '<META HTTP-EQUIV = "REFRESH" CONTENT="60";URL="tabelaRr.php">';
 $evecode = $resultados1 + $resultados2;
$_SESSION["evecode"]=$evecode;
	$result = "SELECT * FROM saldo WHERE id_user = '$id_user' ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
$sald = base64_decode($resulta['saldofinal']);
if ($sald >= $vt){
$vt=$_SESSION["vt"];
 $diferenca = $sald - $vt;
$_SESSION["dirf"]=$diferenca;
}else {
echo " Fundos insuficientes ";?>
<br><br>
<a class="btn btn-dark text-center inline"  href="erro2.php">Erros</a>
<?php
}


?>
	

  	<div class="dropdown-divider text-light"></div>
</div></h6>


<?php

 $id_user = $_SESSION['id_user'];
?><h6 class="text-dark fw-bolder"><div class=" text-start"  >PU</div> <div class="text-end "  > <?php

echo $valorf = GetVl ($valor);
?>,00Kz</div></h6>
<h6 class="text-dark fw-bolder"><div class=" text-start"  >Imposto</div> <div class="text-end "  > <?php


?>00,00Kz</div></h6><?php
$resultat = $_SESSION['resultat'];
$evecode = $_SESSION['evecode'];
$periodon= $_SESSION['periodon'];
$valort = $_SESSION["vt"];//$vt;
$tipon = $_SESSION['tipon'];
$vtr = $_SESSION['vtr'];
$valf=$valorn;
 

$result_usuario = "INSERT INTO sorteiok (id_user, key1, ideve, date, eve, dias, valor, tipo, periodo, rfinal) VALUES ('$id_user','$valf', '$resultat', NOW(), '$evecode', '1', '$valort', '$tipon', '$periodon', '$vtr')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			


			

					 $resu =	$_SESSION["dirf"];	
$resu = base64_encode($resu);					
									$result_usuario = "UPDATE saldo SET saldofinal = '$resu' WHERE saldo . id_user = '$id_user' ";
									$resultado_usuario = mysqli_query($conn, $result_usuario);
	$resulta = mysqli_fetch_row($resultado);
		

	
	echo $_SESSION["msg"] ='<div class="fixed-top alert alert-success alert-dismissible fade show" role="alert" style="z-index:9999; top:50;">Sucesso!</div>';
		

  ?>
    <div class=" text-center">

	<br>
		<form class="form-control-inline" method="POST" action="" ajax="true">
			
<input class="form-control-inline-xl  fw-bolder  btn btn-dark text-center" type="hidden" name="contra" >
			
  	<div class="dropdown-divider"></div>
<input class="form-control-inline-xl  fw-bolder  btn btn-dark text-center" type="submit"  value="ok" >
	</form><?php 


}

if (isset($_POST['contra'])){
echo $_SESSION["msg"] ='<div class="fixed-top alert alert-success alert-dismissible fade show" role="alert" style="z-index:9999; top:50;">Sucesso!</div>';
		header("Location: partk.php");
		unset($_SESSION["dirf"]);
unset($_SESSION["vt"]);
unset($_SESSION["vtr"]);
unset($_SESSION["valory"]);
unset($_SESSION['resultat']);
 unset($_SESSION['evecode']);
unset($_SESSION['periodo']);

unset($_SESSION["vt"]);//$vt;
unset($_SESSION['tipon']);
unset($_SESSION['tipo']);
}
?>

	


<input class="form-control-inline-xl   fw-bolder  btn btn-dark text-center" type="submit"  
name="action" onclick="history.back(-4)" 
value="Fechar" 
>

  </div>  </div>
  



</div>
		<?php

		}else{
	echo $_SESSION["msg"] ='<div class="fixed-top alert alert-warning alert-dismissible fade show" role="alert" style="z-index:9999; top:50;">Iniciar a sessão!</div>';
		//header("Location: index.php");
	
}


?>
