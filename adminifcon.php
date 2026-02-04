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
if (isset($_SESSION['id_user'])) {
?>
     <br>  <strong>Quantos registrados</strong>
<br>  
	 <?php
$id_user= $_SESSION['id_user'] ; 
$result = "SELECT id COUNT FROM user ";
    $resultado = mysqli_query($conn, $result);
    $resulta = mysqli_num_rows($resultado);
    
      if(!empty($resulta >= 1)){ ?>
  
    <div class="text-center ">
    <small class="sup">
    <strong class="text-light text-bolder"> <div class="badge btn-danger display-6"
      title="Participantes"  data-trigger="hover" data-content="Some content"
      >  <?php echo $resulta?> </strong></div> </div></small>
              <?php
}?>
<nav class="navbar navbar-expand-lg navbar-danger  bg-dark"></nav>
  <br>  <strong>Quantos conectados</strong>
<br>
   <?php
 
$result = "SELECT id COUNT FROM user WHERE estado=1";
    $resultado = mysqli_query($conn, $result);
    $resulta = mysqli_num_rows($resultado);
      if(!empty($resulta >= 1)){ ?>
  
    <div class="text-center ">
    <small class="sup">
    <strong class="text-light text-bolder"> <div class="badge btn-danger display-6"
      title="Participantes"  data-trigger="hover" data-content="Some content"
      >  <?php echo $resulta?> </strong></div> </div></small>
        <?php
}?>
<nav class="navbar navbar-expand-lg navbar-danger  bg-dark"></nav>
  <br>  <strong>Quantos desconetados</strong>
<br>
   <?php
 
$result = "SELECT id COUNT FROM user WHERE estado=0";
    $resultado = mysqli_query($conn, $result);
    $resulta = mysqli_num_rows($resultado);
      if(!empty($resulta >= 1)){ ?>
  
    <div class="text-center ">
    <small class="sup">
    <strong class="text-light text-bolder"> <div class="badge btn-danger display-6"
      title="Participantes"  data-trigger="hover" data-content="Some content"
      >  <?php echo $resulta?> </strong></div> </div></small>

	<?php
}
}
	include_once ("retr.php");

?>
