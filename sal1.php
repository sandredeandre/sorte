<div class="card"style="background-color: black;">
<span class="fixed-top small sup text-light  " style="top:0; left:60%;"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
  <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
  <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
</svg>
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
</div>