 <?php
 
include_once ("header.php");  
if (!empty($_SESSION['id_user'])){
$id_use=$_SESSION["id_user"];
	$result = "SELECT * FROM saldo WHERE id_user = '$id_use'  ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_fetch_assoc($resultado);
		$saldofinal=base64_decode($resulta["saldofinal"]);

	$respagote=	$_SESSION["tipoinst"];
$result = "SELECT * FROM winner WHERE tipoinst='$respagote' LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

		if (isset($resulta)) {

$respagote= 1;
			if($respagote=="1" && $resulta["tipoinst"]=="1" ){
$saldo=$saldofinal+1000;
$saldo=base64_encode($saldo);
$result_usuario = "UPDATE saldo SET saldofinal = '$saldo'  WHERE saldo . id_user = '$id_use' ";
									$resultado_usuario = mysqli_query($conn, $result_usuario);
									
				$result = "SELECT * FROM winner WHERE tipoinst=1 LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resultado)){
		

				 $id_user = $resulta['id_user'];
				 $date= $resulta['date'];
                 $ideve=$resulta['ideve'];
				 $eve = $resulta['eve'];
				 $key1 = $resulta['key1'];
				 $tipo =$resulta['tipo'];
				 $premio =  $resulta['premio'];
				 $tipoinst = $resulta['tipoinst'];
$tel = $resulta ['phone'];
		
			$result_usuario = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
include 'smsclientven.php';
			$result = "DELETE FROM sorteioinst  WHERE tipoinst = 1";
			$resultado_usuario = mysqli_query($conn, $result);
			$result = "DELETE FROM winner  WHERE tipoinst=1 ";
			$resultado_usuario = mysqli_query($conn, $result);
				header("Location: vet100.php");
}	
	


}
//pago 10 
$respagote ="10";
if ($respagote=="10" && $resulta["tipoinst"]=="10") {
$saldo=$saldofinal-1000;
$saldo=base64_encode($saldo);
	$result_usuario = "UPDATE saldo SET saldofinal = '$saldo'  WHERE saldo . id_user = '$id_use' ";
									$resultado_usuario = mysqli_query($conn, $result_usuario);
									$result = "DELETE FROM sorteioinst  WHERE tipoinst=10 ";
			$resultado_usuario = mysqli_query($conn, $result);
				
$result = "SELECT * FROM winner WHERE tipoinst=10 LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resultado)){
		

				 $id_user = $resulta['id_user'];
				 $date= $resulta['date'];
                 $ideve=$resulta['ideve'];
				 $eve = $resulta['eve'];
				 $key1 = $resulta['key1'];
				 $tipo =$resulta['tipo'];
				 $premio =  $resulta['premio'];
				 $tipoinst = $resulta['tipoinst'];

			$tel = $resulta ['phone'];
		
			$result_usuario = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
include 'smsclientven.php';
			
			$result = "DELETE FROM sorteioinst  WHERE tipoinst = 10";
			$resultado_usuario = mysqli_query($conn, $result);
			$result = "DELETE FROM winner  WHERE tipoinst=10 ";
			$resultado_usuario = mysqli_query($conn, $result);
				header("Location: vet200off.php");
}


}



$respagote ="2";

if ($respagote=="2" && $resulta["tipoinst"]=="2") {
$saldo=$saldofinal+2000;
$saldo=base64_encode($saldo);
	$result_usuario = "UPDATE saldo SET saldofinal = '$saldo'  WHERE saldo . id_user = '$id_use' ";
									$resultado_usuario = mysqli_query($conn, $result_usuario);
									$result = "DELETE FROM sorteioinst  WHERE tipoinst=2 ";
			$resultado_usuario = mysqli_query($conn, $result);
				
$result = "SELECT * FROM winner WHERE tipoinst=2 LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resultado)){
		

				 $id_user = $resulta['id_user'];
				 $date= $resulta['date'];
                 $ideve=$resulta['ideve'];
				 $eve = $resulta['eve'];
				 $key1 = $resulta['key1'];
				 $tipo =$resulta['tipo'];
				 $premio =  $resulta['premio'];
				 $tipoinst = $resulta['tipoinst'];

			$tel = $resulta ['phone'];
		
			$result_usuario = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			
include 'smsclientven.php';
			$result = "DELETE FROM sorteioinst  WHERE tipoinst = 2";
			$resultado_usuario = mysqli_query($conn, $result);
			$result = "DELETE FROM winner  WHERE tipoinst=2 ";
			$resultado_usuario = mysqli_query($conn, $result);
				header("Location: vet200.php");
}


}
$respagote ="3";
if ($respagote=="3" && $resulta["tipoinst"]=="3") {
	$saldo=$saldofinal+5000;
$saldo=base64_encode($saldo);
	$result_usuario = "UPDATE saldo SET saldofinal = '$saldo'  WHERE saldo . id_user = '$id_use' ";
									$resultado_usuario = mysqli_query($conn, $result_usuario);
									$result = "DELETE FROM sorteioinst  WHERE tipoinst=3 ";
			$resultado_usuario = mysqli_query($conn, $result);
		$result = "SELECT * FROM winner WHERE tipoinst=3 LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resultado)){
		

				 $id_user = $resulta['id_user'];
				 $date= $resulta['date'];
                 $ideve=$resulta['ideve'];
				 $eve = $resulta['eve'];
				 $key1 = $resulta['key1'];
				 $tipo =$resulta['tipo'];
				 $premio =  $resulta['premio'];
				 $tipoinst = $resulta['tipoinst'];
$tel = $resulta ['phone'];
		
			$result_usuario = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
include 'smsclientven.php';
			$result = "DELETE FROM sorteioinst  WHERE tipoinst = 3";
			$resultado_usuario = mysqli_query($conn, $result);
			$result = "DELETE FROM winner  WHERE tipoinst=3 ";
			$resultado_usuario = mysqli_query($conn, $result);
				header("Location: vet500.php");
}	
		

}
$respagote ="4";
if ($respagote=="4" && $resulta["tipoinst"]=="4") {
	$saldo=$saldofinal+10000;
$saldo=base64_encode($saldo);
	$result_usuario = "UPDATE saldo SET saldofinal = '$saldo'  WHERE saldo . id_user = '$id_use' ";
									$resultado_usuario = mysqli_query($conn, $result_usuario);
									$result = "DELETE FROM sorteioinst  WHERE tipoinst=4 ";
			$resultado_usuario = mysqli_query($conn, $result);
				
				$result = "SELECT * FROM winner WHERE tipoinst=4 LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resultado)){
		

				 $id_user = $resulta['id_user'];
				 $date= $resulta['date'];
                 $ideve=$resulta['ideve'];
				 $eve = $resulta['eve'];
				 $key1 = $resulta['key1'];
				 $tipo =$resulta['tipo'];
				 $premio =  $resulta['premio'];
				 $tipoinst = $resulta['tipoinst'];
$tel = $resulta ['phone'];
		
			$result_usuario = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
include 'smsclientven.php';
			$result = "DELETE FROM sorteioinst  WHERE tipoinst = 4";
			$resultado_usuario = mysqli_query($conn, $result);
			$result = "DELETE FROM winner  WHERE tipoinst=4 ";
			$resultado_usuario = mysqli_query($conn, $result);
				header("Location: vet1m.php");
}	

}
$respagote ="5";
if ($respagote=="5" && $resulta["tipoinst"]=="5") {
	
	$saldo=$saldofinal+20000;
$saldo=base64_encode($saldo);
	$result_usuario = "UPDATE saldo SET saldofinal = '$saldo'  WHERE saldo . id_user = '$id_use' ";
									$resultado_usuario = mysqli_query($conn, $result_usuario);
									$result = "DELETE FROM sorteioinst  WHERE tipoinst=5 ";
			$resultado_usuario = mysqli_query($conn, $result);
				$result = "SELECT * FROM winner WHERE tipoinst=5 LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resultado)){
		

				 $id_user = $resulta['id_user'];
				 $date= $resulta['date'];
                 $ideve=$resulta['ideve'];
				 $eve = $resulta['eve'];
				 $key1 = $resulta['key1'];
				 $tipo =$resulta['tipo'];
				 $premio =  $resulta['premio'];
				 $tipoinst = $resulta['tipoinst'];
$tel = $resulta ['phone'];
		
			$result_usuario = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
include 'smsclientven.php';
			$result = "DELETE FROM sorteioinst  WHERE tipoinst = 5";
			$resultado_usuario = mysqli_query($conn, $result);
			$result = "DELETE FROM winner  WHERE tipoinst=5 ";
			$resultado_usuario = mysqli_query($conn, $result);
				header("Location: vet2m.php");
}	
	
}
$respagote ="6";
if ($respagote=="6" && $resulta["tipoinst"]=="6") {
	$saldo=$saldofinal+50000;
$saldo=base64_encode($saldo);
	$result_usuario = "UPDATE saldo SET saldofinal = '$saldo'  WHERE saldo . id_user = '$id_use' ";
									$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	$result = "SELECT * FROM winner WHERE tipoinst=6 LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resultado)){
		

				 $id_user = $resulta['id_user'];
				 $date= $resulta['date'];
                 $ideve=$resulta['ideve'];
				 $eve = $resulta['eve'];
				 $key1 = $resulta['key1'];
				 $tipo =$resulta['tipo'];
				 $premio =  $resulta['premio'];
				 $tipoinst = $resulta['tipoinst'];

			$tel = $resulta ['phone'];
		
			$result_usuario = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			include 'smsclientven.php';
			$result = "DELETE FROM sorteioinst  WHERE tipoinst = 6";
			$resultado_usuario = mysqli_query($conn, $result);
			$result = "DELETE FROM winner  WHERE tipoinst=6 ";
			$resultado_usuario = mysqli_query($conn, $result);
				header("Location: vet5m.php");
}	
	
}
$respagote ="7";
if ($respagote=="7" && $resulta["tipoinst"]=="7") {
	$saldo=$saldofinal+200000;
$saldo=base64_encode($saldo);
	$result_usuario = "UPDATE saldo SET saldofinal = '$saldo'  WHERE saldo . id_user = '$id_use' ";
									$resultado_usuario = mysqli_query($conn, $result_usuario);

$result = "SELECT * FROM winner WHERE tipoinst=7 LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resultado)){
		

				 $id_user = $resulta['id_user'];
				 $date= $resulta['date'];
                 $ideve=$resulta['ideve'];
				 $eve = $resulta['eve'];
				 $key1 = $resulta['key1'];
				 $tipo =$resulta['tipo'];
				 $premio =  $resulta['premio'];
				 $tipoinst = $resulta['tipoinst'];

			$tel = $resulta ['phone'];
		
			$result_usuario = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
include 'smsclientven.php';
			$result = "DELETE FROM sorteioinst  WHERE tipoinst = 7";
			$resultado_usuario = mysqli_query($conn, $result);
			$result = "DELETE FROM winner  WHERE tipoinst=7 ";
			$resultado_usuario = mysqli_query($conn, $result);
				header("Location: vet100m.php");
}	
	
}
$respagote ="8";
if ($respagote=="8" && $resulta["tipoinst"]=="8") {
	$saldo=$saldofinal+2000000;
$saldo=base64_encode($saldo);
	$result_usuario = "UPDATE saldo SET saldofinal = '$saldo'  WHERE saldo . id_user = '$id_use' ";
									$resultado_usuario = mysqli_query($conn, $result_usuario);
	$result = "SELECT * FROM winner WHERE tipoinst=8 LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resultado)){
		

				 $id_user = $resulta['id_user'];
				 $date= $resulta['date'];
                 $ideve=$resulta['ideve'];
				 $eve = $resulta['eve'];
				 $key1 = $resulta['key1'];
				 $tipo =$resulta['tipo'];
				 $premio =  $resulta['premio'];
				 $tipoinst = $resulta['tipoinst'];
$tel = $resulta ['phone'];
		
			$result_usuario = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
include 'smsclientven.php';
			$result = "DELETE FROM sorteioinst  WHERE tipoinst =8";
			$resultado_usuario = mysqli_query($conn, $result);
			$result = "DELETE FROM winner  WHERE tipoinst=8 ";
			$resultado_usuario = mysqli_query($conn, $result);
				header("Location: vet1ml.php");

}	


}
$respagote ="9";
if ($respagote=="9" && $resulta["tipoinst"]=="9") {
	$saldo=$saldofinal+100000;
$saldo=base64_encode($saldo);
	$result_usuario = "UPDATE saldo SET saldofinal = '$saldo'  WHERE saldo . id_user = '$id_use' ";
									$resultado_usuario = mysqli_query($conn, $result_usuario);
	
$result = "SELECT * FROM winner WHERE tipoinst=9 LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resultado)){
		

				 $id_user = $resulta['id_user'];
				 $date= $resulta['date'];
                 $ideve=$resulta['ideve'];
				 $eve = $resulta['eve'];
				 $key1 = $resulta['key1'];
				 $tipo =$resulta['tipo'];
				 $premio =  $resulta['premio'];
				 $tipoinst = $resulta['tipoinst'];
$tel = $resulta ['phone'];
		
			$result_usuario = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
include 'smsclientven.php';
			$result = "DELETE FROM sorteioinst  WHERE tipoinst = 9";
			$resultado_usuario = mysqli_query($conn, $result);
			$result = "DELETE FROM winner  WHERE tipoinst=9 ";
			$resultado_usuario = mysqli_query($conn, $result);
				header("Location: vet50m.php");
	
}	



}


}	

$result = "SELECT * FROM winner WHERE tipo = 1 LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resulta)){
		

             $id_user = $resulta['id_user'];
				 $date= $resulta['date'];
                 $ideve=$resulta['ideve'];
				 $eve = $resulta['eve'];
				 $key1 = $resulta['key1'];
				 $tipo =$resulta['tipo'];
				 $premio =  $resulta['premio'];
				 $tipoinst = $resulta['tipoinst'];
    $tel = $resulta ['phone'];
		
			$result_usuario = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			include 'smsclientven.php';	
			$result = "DELETE FROM sorteio  WHERE tipo=1 ";
			$resultado_usuario = mysqli_query($conn, $result);
				
				
		
					 }
	//tipo 2


$result = "SELECT * FROM winner WHERE tipo = 2 LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resulta)){
		
	
           $id_user = $resulta['id_user'];
				 $date= $resulta['date'];
                 $ideve=$resulta['ideve'];
				 $eve = $resulta['eve'];
				 $key1 = $resulta['key1'];
				 $tipo =$resulta['tipo'];
				 $premio =  $resulta['premio'];
				 $tipoinst = $resulta['tipoinst'];
		$tel = $resulta ['phone'];
		
			$result_usuario = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			include 'smsclientven.php';
			$result = "DELETE FROM sorteio  WHERE tipo=2 ";
			$resultado_usuario = mysqli_query($conn, $result);
				
	include_once ("sort.php");			
		
					 }
			
					 
				
			
//tipo 3


$result = "SELECT * FROM winner WHERE tipo = 3 LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resulta)){

			 $id_user = $resulta['id_user'];
				 $date= $resulta['date'];
                 $ideve=$resulta['ideve'];
				 $eve = $resulta['eve'];
				 $key1 = $resulta['key1'];
				 $tipo =$resulta['tipo'];
				 $premio =  $resulta['premio'];
				 $tipoinst = $resulta['tipoinst'];
				
       $tel = $resulta ['phone'];
		
			$result_usuario = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			include 'smsclientven.php';	
			$result = "DELETE FROM sorteio  WHERE tipo=3 ";
			$resultado_usuario = mysqli_query($conn, $result);
				
				
		include_once ("sort.php");
					 }
			
		//premio 1

		$result = "SELECT * FROM winner WHERE premio = 1 LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resulta)){
		
	
                 $id_user = $resulta['id_user'];
				 $date= $resulta['date'];
                 $ideve=$resulta['ideve'];
				 $eve = $resulta['eve'];
				 $key1 = $resulta['key1'];
				 $tipo =$resulta['tipo'];
				 $premio =  $resulta['premio'];
				 $tipoinst = $resulta['tipoinst'];
	
     	$tel = $resulta ['phone'];
		
			$result_usuario = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
				
				include 'smsclientven.php';
			$result = "DELETE FROM sorteiop  WHERE premio=1 ";
			$resultado_usuario = mysqli_query($conn, $result);
			 	
include_once ("sort.php");		
					 }
			
	//premio 2


$result = "SELECT * FROM winner WHERE premio = 2 LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resulta)){
		

				
                 $id_user = $resulta['id_user'];
				 $date= $resulta['date'];
                 $ideve=$resulta['ideve'];
				 $eve = $resulta['eve'];
				 $key1 = $resulta['key1'];
				 $tipo =$resulta['tipo'];
				 $premio =  $resulta['premio'];
				 $tipoinst = $resulta['tipoinst'];

			$tel = $resulta ['phone'];
		
			$result_usuario = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
				
			include 'smsclientven.php';	
			$result = "DELETE FROM sorteiop  WHERE premio=2 ";
			$resultado_usuario = mysqli_query($conn, $result);
include_once ("sort.php");				
		 } 		
		
			
//tipo 3


$result = "SELECT * FROM winner WHERE premio = 3 LIMIT 1";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if(isset($resulta)){

				 $id_user = $resulta['id_user'];
				 $date= $resulta['date'];
                 $ideve=$resulta['ideve'];
				 $eve = $resulta['eve'];
				 $key1 = $resulta['key1'];
				 $tipo =$resulta['tipo'];
				 $premio =  $resulta['premio'];
				 $tipoinst = $resulta['tipoinst'];
				
		$tel = $resulta ['phone'];
		
			$result_usuario = "INSERT INTO winbackup (id_user, date, ideve, eve, key1, tipo, premio, tipoinst,phone) VALUES ('$id_user', '$date', '$ideve', '$eve','$key1', '$tipo', '$premio', '$tipoinst','$tel')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
				
				include 'smsclientven.php';
			$result = "DELETE FROM sorteiop  WHERE premio=3 ";
			$resultado_usuario = mysqli_query($conn, $result);
	include_once ("sort.php");			
				
		
					 }
			

				
	
			




			

	
	

	

			
				require("retr.php");	








unset($_SESSION["tipoinst"]);
unset($_SESSION["tipoinst"]);

}
include_once ("copy.php");
?>
