b<?php
include_once "header.php";

if (isset($_SESSION['id_user'])) {
 
 include ("menu.php");
}else {
  
 include_once ("blog.php");
}
?>
  <?php
include ("vermenu1.php");
include ("main.php");
//mudar id por code

?>
     <strong>Levantamentos</strong>
     <div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Confirmar</th>
           <th>Valor</th>
                </tr>
              </thead>
       <tbody>
                       <?php
if (isset($_SESSION['id_user'])) {
 $result = "SELECT * FROM lev WHERE id_user = '$id_user' ";
 $resultado = mysqli_query($conn, $result);
 ?><?php
 while ($resulta = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
    
        <td> <?php echo $mom = base64_decode($resulta['conf']);?></td>
                <td> <?php echo $nomnen = base64_decode($resulta['lvt']);?></td>
                </tr>
            <?php } ?>

              </tbody>
            </table>
          </div>
     <?php } ?>

  <?php

include_once ("copy.php");

?>
