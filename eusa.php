<?php
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
if (isset($_SESSION['id_user'])) {
?>
       <strong>Recargas</strong>
 <div class="text-muted text-end display-6">usei </div>
   <div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Data venda</th>
                   <th>Data uso</th>
           <th>Referência</th>
                  <th>Valor</th>
                   <th>Recarga</th>
                </tr>
              </thead>
       <tbody>
                       <?php

 $result = "SELECT * FROM vendasbu WHERE id_user='$id_user'!= (vendasbu.id_user=vendasbu.id_agent && vendasbu.id_user='$id_user') ";
 $resultado = mysqli_query($conn, $result);

?>

            <?php
 while ($resulta = mysqli_fetch_assoc($resultado)) { ?>
        <tr>

        <td> <?php echo $date = $resulta['datavenda'];?></td>
        <td> <?php echo $date = $resulta['datauso'];?></td>
                <td> <?php echo $ideve = base64_decode($resulta['code_venda']);?></td>
        <td> <?php echo $eve = base64_decode($resulta['valorc']);?></td>
        <td> <?php echo $key1 = base64_decode($resulta['code_origem']);?></td>
                </tr>
            <?php } ?>
              </tbody>
            </table>
          </div>


   <?php } ?>
  
 
   <div class="text-muted text-end display-6">Vendi </div>
   <div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
               
           
                  
                  <th>Data venda</th>
                   <th>Data uso</th>
           <th>Referência</th>
                  <th>Valor</th>
                   <th>Recarga</th>

                </tr>
             
              </thead>
       <tbody>
                       <?php

 $result = "SELECT * FROM vendasbu WHERE vendasbu.id_agent='$id_user' !=vendasbu.id_agent=vendasbu.id_user ";
 $resultado = mysqli_query($conn, $result);

?>

            <?php
 while ($resulta = mysqli_fetch_assoc($resultado)) { ?>
        <tr>

             
        <td> <?php echo $date = $resulta['datavenda'];?></td>
        <td> <?php echo $date = $resulta['datauso'];?></td>
                <td> <?php echo $ideve = base64_decode($resulta['code_venda']);?></td>
        <td> <?php echo $eve = base64_decode($resulta['valorc']);?></td>
        <td> <?php echo $key1 = base64_decode($resulta['code_origem']);?></td>
            <?php } ?>
              </tbody>
            </table>
          </div>
  <?php

include_once ("copy.php");

?>
