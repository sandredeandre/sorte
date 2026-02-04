<?php

require("conn/conn.php");
include_once ("gcu.php"); 
include_once ("ecode.php");
if(isset($_SESSION['id_user'])){
		$prodtipo = base64_encode($_POST['prodtipo']);
		$key1 = $_POST['keye'];
		 $modelo =base64_encode($_POST['modelo']);
 $prodtipo =base64_encode($_POST['prodtipo']);
$chave = $_POST['pchave'];
		$datai =$_POST['datai'];
		$dataf = $_POST['dataf'];
		$limit = $_POST['limit'];
		$pchave = $_POST['pchave'];
		$estado = 1;
		$img =  $_FILE['img']['name'];
		$id_user = $_SESSION['id_user'];
		$eve = gerarCU();
	
		$ideve = gerarCodigoUnico();	
			//$ideve = base64_encode$ideve);
			
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
	if($_FILES['img']['error'] != 0){
				die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
				exit; //Para a execução do script
			}
$extensao = strtolower(end(explode('.', $_FILES['img']['name'])));
			if(array_search($extensao, $_UP['extensoes'])=== false){		
				
				
				echo $_SESSION["msg"] ='<div class="fixed-top alert alert-warning alert-dismissible fade show" role="alert" style="z-index:9999; top:50;">A imagem não foi cadastrada extesão inválida</div>';
			header("Location: index.php");
			}
			else if ($_UP['tamanho'] < $_FILES['img']['size']){
				
					echo $_SESSION["msg"] ='<div class="fixed-top alert alert-warning alert-dismissible fade show" role="alert" style="z-index:9999; top:50;">Arquivo muito grande</div>';
			}
else{
				//Primeiro verifica se deve trocar o nome do arquivo
				if($UP['renomeia'] == true){
					//Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
					$nome_final = time().'.jpg';
				}else{
					//mantem o nome original do arquivo
					$nome_final = $_FILES['img']['name'];
			$nome_final = base64_encode($nome_final);
	}
				//Verificar se é possivel mover o arquivo para a pasta escolhida
				if(move_uploaded_file($_FILES['img']['tmp_name'], $_UP['pasta']. $nome_final)){
					//Upload efetuado com sucesso, exibe a mensagem		
$result = "INSERT INTO produtos (id_user, ideve, pchave, key1, prodtipo  datai, img, dataf, eve, limit, estado)
 VALUES ('$id_user','$ideve', '$pchave','$key1', '$prodtipo', '$datai', '$img', '$dataf', '$eve','$limit','$estado')";
$resultado_usuario = mysqli_query($conn, $result);
		
					echo $_SESSION["msg"] ='<div class="fixed-top alert alert-warning alert-dismissible fade show" role="alert" style="z-index:9999; top:50;">Imagem carregada com Sucesso</div>';
header("Location: index.php");						
				}else{
					//Upload não efetuado com sucesso, exibe a mensagem
				
					echo $_SESSION["msg"] ='<div class="fixed-top alert alert-warning alert-dismissible fade show" role="alert" style="z-index:9999; top:50;">Imagem não foi carregada com Sucesso</div>';
				}
			}	
				


}else{
include_once ("header.php"); 
include_once  ("menu.php");
?>
<br>	<br>	<br>
 <div class=" fst-italic text-dark text-center">
    <strong>Não pode proceguir</strong> 
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bricks" viewBox="0 0 16 16">
  <path d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5v-3zM3 4v2h4.5V4H3zm5.5 0v2H13V4H8.5zM3 10v2h4.5v-2H3zm5.5 0v2H13v-2H8.5zM1 1v2h3.5V1H1zm4.5 0v2h5V1h-5zm6 0v2H15V1h-3.5zM1 7v2h3.5V7H1zm4.5 0v2h5V7h-5zm6 0v2H15V7h-3.5zM1 13v2h3.5v-2H1zm4.5 0v2h5v-2h-5zm6 0v2H15v-2h-3.5z"/>
</svg>
    </div> 
<br><br><br>
<?php
include_once ("copy.php");

?>
<?php
}
?>
