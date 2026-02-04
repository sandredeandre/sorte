<?php

require "conn/conn.php";

$Valor = filter_input(INPUT_POST, 'Valor', FILTER_SANITIZE_STRING);
$Valor = base64_encode($Valor);

$cfile =  $_FILE['cfile']['name'];
$id_user = $_SESSION['id_user'];


$result = "SELECT * FROM saldo WHERE id_user = '$id_user' ";
$resultado = mysqli_query($conn, $result);
$resulta = mysqli_fetch_assoc($resultado);

if (!empty($resulta)) {
 $_UP['pasta'] = 'img/';
 $_UP['tamanho'] = 1024*1024*100; //5mb
 $_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
 //Renomeiar
 $_UP['renomeia'] = false;

 //Array com os tipos de erros de upload do PHP
 $_UP['erros'][0] = 'Não houve erro';
 $_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
 $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
 $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
 $_UP['erros'][4] = 'Não foi feito o upload do arquivo';
 if ($_FILES['cfile']['error'] != 0) {
  die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
  exit; //Para a execução do script
 }
 $extensao = strtolower(end(explode('.', $_FILES['cfile']['name'])));
 if (array_search($extensao, $_UP['extensoes'])=== false) {
  echo "
					
					<script type=\"text/javascript\">
						alert(\"A imagem não foi cadastrada extesão inválida.\");
					</script>
				";
 }
 else if ($_UP['tamanho'] < $_FILES['cfile']['size']) {
  echo "
				
					<script type=\"text/javascript\">
						alert(\"Arquivo muito grande.\");
					</script>
				";
 }
 else {
  //Primeiro verifica se deve trocar o nome do arquivo
  if ($UP['renomeia'] == true) {
   //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
   $nome_final = time().'.jpg';
  }else {
   //mantem o nome original do arquivo
   $nome_final = $_FILES['cfile']['name'];
   $nome_final = base64_encode($nome_final);
  }
  //Verificar se é possivel mover o arquivo para a pasta escolhida
  if (move_uploaded_file($_FILES['cfile']['tmp_name'], $_UP['pasta']. $nome_final)) {
   //Upload efetuado com sucesso, exibe a mensagem
   $result_usuario = "UPDATE saldo SET Valor = '$Valor', cfile = '$nome_final' WHERE id_user = '$id_user'";
   $resultado = mysqli_query($conn, $result_usuario);
   echo "
						
						<script type=\"text/javascript\">
							alert(\"Imagem cadastrada com Sucesso.\");
						</script>
					";
   header("Location: index.php");
  }else {
   //Upload não efetuado com sucesso, exibe a mensagem
   echo "
						
						<script type=\"text/javascript\">
							alert(\"Imagem não foi carregada com Sucesso.\");
						</script>
					";
  }
 }


}else {
 $_UP['pasta'] = 'img/';
 $_UP['tamanho'] = 1024*1024*100; //5mb
 $_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
 //Renomeiar
 $_UP['renomeia'] = false;

 //Array com os tipos de erros de upload do PHP
 $_UP['erros'][0] = 'Não houve erro';
 $_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
 $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
 $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
 $_UP['erros'][4] = 'Não foi feito o upload do arquivo';
 if ($_FILES['cfile']['error'] != 0) {
  die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
  exit; //Para a execução do script
 }
 $extensao = strtolower(end(explode('.', $_FILES['cfile']['name'])));
 if (array_search($extensao, $_UP['extensoes'])=== false) {
  echo "
					
					<script type=\"text/javascript\">
						alert(\"A imagem não foi cadastrada extesão inválida.\");
					</script>
				";
 }
 else if ($_UP['tamanho'] < $_FILES['cfile']['size']) {
  echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://0035.ao/index.php'>
					<script type=\"text/javascript\">
						alert(\"Arquivo muito grande.\");
					</script>
				";
 }
 else {
  //Primeiro verifica se deve trocar o nome do arquivo
  if ($UP['renomeia'] == true) {
   //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
   $nome_final = time().'.jpg';
  }else {
   //mantem o nome original do arquivo
   $nome_final = $_FILES['cfile']['name'];
  }
  //Verificar se é possivel mover o arquivo para a pasta escolhida
  if (move_uploaded_file($_FILES['cfile']['tmp_name'], $_UP['pasta']. $nome_final)) {

   $Valor = base64_encode($Valor);
   $nome_final = base64_encode('$nome_final');

				$result= "INSERT INTO saldo (id_user, Valor, cfile) VALUES ('$id_user', '$Valor', '$nome_final')";
$resultado_usuario = mysqli_query($conn, $result);
header("Location: index.php");
				}else{
					//Upload não efetuado com sucesso, exibe a mensagem
					echo "
					
    <script type=\"text/javascript\">
							alert(\"Imagem não foi cadastrada com Sucesso.\");
						</script>
					";
   }
  }


 }



?>
