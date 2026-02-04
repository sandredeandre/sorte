<span class="text-muted">
<?php

if (isset($_SESSION['id_user'])) {
 $id_user = $_SESSION['id_user'] ;
 $result_usuario = "SELECT * FROM saldo WHERE id_user = '$id_user' LIMIT 1";
 $resultado_usuario = mysqli_query($conn, $result_usuario);
 $resultado = mysqli_fetch_assoc($resultado_usuario);

 if (isset($resultado)) {
  echo $saldo = base64_decode($resultado['saldofinal']);
 }

} else {
?>

 0.00
 <?php
}
?>Kz</span>