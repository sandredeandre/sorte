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

?>
<strong>Colocada </strong>
<div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                 
                  <th>Data</th>
           <th>Evento</th>
                  <th>Sorteio</th>
                   <th>Valor </th>

                </tr>
              </thead>
       <tbody>
                       <?php
if (isset($_SESSION['id_user'])) {
 $result = "SELECT * FROM sorteiok WHERE id_user = '$id_user' && estado=1 ";
 $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);
?>
          <?php
 while ($resulta = mysqli_fetch_assoc($resultado)) { ?>
        <tr>

    
         <td> <?php echo $date = $resulta['date'];?></td>
                <td> <?php echo $ideve = $resulta['ideve'];?></td>
        <td> <?php echo $eve = $resulta['eve'];?></td>
        <td> <?php echo $key1 = $resulta['key1'];?></td>
                </tr>
            <?php }?>
              </tbody>
            </table>
          </div>
   <strong>Finalizada </strong>

   <div class="table-responsive ">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                
                  <th>Data</th>
           <th>Evento</th>
                  <th>Sorteio</th>
                   <th>Valor </th>

                </tr>
              </thead>
       <tbody>
                       <?php
                        $result = "SELECT * FROM sorteiok WHERE id_user = '$id_user' && estado=0   && finalidd=0 ";
 $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);
?>
          <?php
 while ($resulta = mysqli_fetch_assoc($resultado)) { ?>
        <tr>

        <td> <?php echo $date = $resulta['date'];?></td>
                <td> <?php echo $ideve = $resulta['ideve'];?></td>
        <td> <?php echo $eve = $resulta['eve'];?></td>
        <td> <?php echo $key1 = $resulta['key1'];?></td>
                </tr>
            <?php }?>
              </tbody>
            </table>
          </div>
  <?php
}
include_once ("copy.php");

?>
