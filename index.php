
<?php

include_once ("header.php");  

?>

<?php

if(isset($_SESSION['id_user'])){
include_once  ("menu.php");
}else{
include_once ("blog.php");
}
?>

<?php

include_once ("layout.php");
 $result = "SELECT * FROM sites WHERE id = 6 && nome = 'carou'";
 $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);
  $nom =base64_decode($resulta['ctd']);
 include("$nom");

echo "<br>";

$result = "SELECT * FROM sites WHERE id = 7 && nome = 'produt'";
 $resultado = mysqli_query($conn, $result);
 $resulta = mysqli_fetch_assoc($resultado);
  $nom =base64_decode($resulta['ctd']);
 include("$nom");
 


include_once ("erro1.php");
include_once ("layout1.php"); 
include_once ("copy.php");
?>
