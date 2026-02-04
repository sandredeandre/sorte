<?php

if(isset($_SESSION['id_user'])){
// rever a lógica de adiantamento de dias
$id = $_POST['add'];
 $result=" SELECT * FROM sorteiok WHERE id_user = '$id_user' && id = '$id' LIMIT 1 ";
 $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);
$resus=$resulta['key1'];
$rf=$resulta['rfinal'];
$re =$resulta['valor'];
if(!empty($_POST['ma'])) {


if(($resulta['dias'] < $resulta['periodo']) && (($resulta['dias'] * $resus ) < ($rf))){
 // Faz as logica para adicionar mais 1 dia e seus descontos de saldo
 $dias = $resulta['dias'] + 1;

 $valor = $re + $resus;
$valor=base64_encode($valor);
 $key1 =  $resulta['key1'];

 $id = $resulta['id'];
 
 $result=" SELECT * FROM saldo WHERE id_user = '$id_user' LIMIT 1 ";
 $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);
 $resd =base64_decode($resulta["saldofinal"]);
 
$ykey1 = $resd - $key1;
$ykey1=base64_encode($ykey1);
 $result = "UPDATE saldo SET saldofinal =  '$ykey1'  WHERE saldo.id_user = '$id_user' ";
 $resultado = mysqli_query($conn, $result);
 $result = "UPDATE sorteiok SET dias =  '$dias', valor =  '$valor',  dateh = NOW WHERE sorteiok . id_user = '$id_user' AND sorteiok.id = '$id' ";
 $resultado = mysqli_query($conn, $result);

 }elseif($resulta['dias']  ==  $resulta['periodo'] && ($resulta['dias']  * $resus) >= $rf){
 // Faz o select das datas e vê o intervalo se  compara os se da o o numero de dias
 $result = "UPDATE sorteiok SET dias =  '$dias', valor =  '$valor',   estado = 0, finalidd=  0,  dateh = NOW WHERE sorteiok . id_user = '$id_user' AND sorteiok.id = '$id' ";
 $resultado = mysqli_query($conn, $result);

 
}
}
}
?>
