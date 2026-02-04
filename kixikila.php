<?php
if (isset($_POST['partk'])){
include("partk.php");
}else{ ?>
<div class="main">
<nav class="nav-tabs navbar-expand-lg navbar-primary btn-light">
	 <div class=" fst-italic text-dark text-center">
    <strong>365 - KIXIKILA TODOS DIAS</strong> 
    </div> 
	
				<div class="dropdown-divider"></div>
	 <div class=" fst-italic text-dark text-center">Multiplica o teu dinheiro todos dias do ano com nossa formula incrível. <p class="text-dark fw-bolder text-dark small"> 
				Consulta a nossa tabela em 
<a class="btn btn-primary" href="tabela.php"><span  class="btn btn-primary">Tabela</span></a>
				</p>
    
    </div>
<div class="row">

<div class="col-lg-2">
<div class="card-header">
 <?php 
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 200 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	?>
		<div class="text-center ">
<div class="badge">
		<h4 class="    fw-bolder text-center text-danger ">Cabeças </h4>
	<div class="dropdown-divider"></div>00<?php echo $resulta;?>	
</div>
	<div class="dropdown-divider"></div>
<div class=" text-center ">
<div class="thumbnail">
<h4 class="    fw-bolder text-danger ">Diário	/Entrada</h4>200,00Kz
</div>
<div class="dropdown-divider"></div>
</div>
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Mensal</h4>12.000,00Kz
</div>	
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Semestral	</h4>72.000,00Kz
</div>
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Anual</h4>144.000,00Kz
</div>
<div class="dropdown-divider"></div>
<p class="text-dark fw-bolder text-dark small"> Ver retornos em
<a class="btn-primary" href="tabela.php"><span  class="btn btn-primary">Tabela</span></a>
				</p>
 	<div class="text-center">		
<?php 
if (isset($_SESSION["id_user"])){
include("partkb.php");
}
?>
</div>

</div>	 </div>	
<br></div>

<div class="col-lg-2">

<div class="card-header">
 <?php 
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 10000 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	?>
		<div class="text-center ">
<div class="badge">
		<h4 class="    fw-bolder text-center text-danger ">Cabeças </h4>
	<div class="dropdown-divider"></div>00<?php echo $resulta;?>	
</div>

	<div class="dropdown-divider"></div>
<div class=" text-center ">
<div class="thumbnail">
<h4 class="    fw-bolder text-danger ">Diário	/Entrada</h4>10.000,00Kz
</div>
<div class="dropdown-divider"></div>
</div>
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Mensal</h4>600.000,00Kz
</div>	
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Semestral	</h4>3.600.000,00Kz
</div>
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Anual</h4>7.200.000,00Kz
</div>
<div class="dropdown-divider"></div>
<p class="text-dark fw-bolder text-dark small"> Ver retornos em
<a class="btn-primary" href="tabela.php"><span  class="btn btn-primary">Tabela</span></a>
				</p>
	<div class="text-center">		

<?php 
if (isset($_SESSION["id_user"])){
include("partkb.php");
}
?>
</div>


</div>	 </div><br>	</div>
	
<div class="col-lg-2">
<div class="card-header">
 <?php 
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 1000 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	?>
		<div class="text-center ">
<div class="badge">
		<h4 class="    fw-bolder text-center text-danger ">Cabeças </h4>
	<div class="dropdown-divider"></div>00<?php echo $resulta;?>	
</div>
	
	<div class="dropdown-divider"></div>
<div class=" text-center ">
<div class="thumbnail">
<h4 class="    fw-bolder text-danger ">Diário	/Entrada</h4>1.000,00Kz
</div>
<div class="dropdown-divider"></div>
</div>
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Mensal</h4>60.000,00Kz
</div>	
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Semestral	</h4>360.000,00Kz
</div>
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Anual</h4>720.000,00Kz
</div>
<div class="dropdown-divider"></div>
<p class="text-dark fw-bolder text-dark small"> Ver retornos em
<a class="btn-primary" href="tabela.php"><span  class="btn btn-primary">Tabela</span></a>
				</p>
	<div class="text-center">		

<?php 
if (isset($_SESSION["id_user"])){
include("partkb.php");
}
?>
</div>

</div>	 </div>	<br></div>


<div class="col-lg-2">
<div class="card-header">
 <?php 
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 500 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	?>
		<div class="text-center ">
<div class="badge">
		<h4 class="    fw-bolder text-center text-danger ">Cabeças </h4>
	<div class="dropdown-divider"></div>00<?php echo $resulta;?>	
</div>
	
	<div class="dropdown-divider"></div>
<div class=" text-center ">
<div class="thumbnail">
<h4 class="    fw-bolder text-danger ">Diário	/Entrada</h4>500,00Kz
</div>
<div class="dropdown-divider"></div>
</div>
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Mensal</h4>30.000,00Kz
</div>	
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Semestral	</h4>180.000,00Kz
</div>
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Anual</h4>360.000,00Kz
</div>
<div class="dropdown-divider"></div>
<p class="text-dark fw-bolder text-dark small"> Ver retornos em
<a class="btn-primary" href="tabela.php"><span  class="btn btn-primary">Tabela</span></a>
				</p>
	<div class="text-center">		
<?php 
if (isset($_SESSION["id_user"])){
include("partkb.php");
}
?>
</div>

</div>	 </div>	<br></div>

  
<div class="col-lg-2">
<div class="card-header">
 <?php 
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 2000 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	?>
		<div class="text-center ">
<div class="badge">
		<h4 class="    fw-bolder text-center text-danger ">Cabeças </h4>
	<div class="dropdown-divider"></div>00<?php echo $resulta;?>	
</div>
	
	<div class="dropdown-divider"></div>
<div class=" text-center ">
<div class="thumbnail">
<h4 class="    fw-bolder text-danger ">Diário	/Entrada</h4>2000,00Kz
</div>
<div class="dropdown-divider"></div>
</div>
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Mensal</h4>120.000,00Kz
</div>	
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Semestral	</h4>720.000,00Kz
</div>
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Anual</h4>1.440.000,00Kz
</div>
<div class="dropdown-divider"></div>
<p class="text-dark fw-bolder text-dark small"> Ver retornos em
<a class="btn-primary" href="tabela.php"><span  class="btn btn-primary">Tabela</span></a>
				</p>
	<div class="text-center">		
<?php 
if (isset($_SESSION["id_user"])){
include("partkb.php");
}
?>
</div>
</div>	 </div>	<br></div>
  

<div class="col-lg-2">
<div class="card-header">
 <?php 
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 5000 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	?>
		<div class="text-center ">
<div class="badge">
		<h4 class="    fw-bolder text-center text-danger ">Cabeças </h4>
	<div class="dropdown-divider"></div>00<?php echo $resulta;?>	
</div>

	<div class="dropdown-divider"></div>
<div class=" text-center ">
<div class="thumbnail">
<h4 class="    fw-bolder text-danger ">Diário	/Entrada</h4>5000,00Kz
</div>
<div class="dropdown-divider"></div>
</div>
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Mensal</h4>300.000,00Kz
</div>	
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Semestral	</h4>1.800.000,00Kz
</div>
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Anual</h4>3.600.000,00Kz
</div>
<div class="dropdown-divider"></div>
<p class="text-dark fw-bolder text-dark small"> Ver retornos em
<a class="btn-primary" href="tabela.php"><span  class="btn btn-primary">Tabela</span></a>
				</p>
	<div class="text-center">		

<?php 
if (isset($_SESSION["id_user"])){
include("partkb.php");
}
?>
</div>

</div>	 </div>	</div>

<div class="col-lg-2">
<div class="card-header">
 <?php 
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 50000 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	?>
		<div class="text-center ">
<div class="badge">
		<h4 class="    fw-bolder text-center text-danger ">Cabeças </h4>
	<div class="dropdown-divider"></div>00<?php echo $resulta;?>	
</div>

	<div class="dropdown-divider"></div>
<div class=" text-center ">
<div class="thumbnail">
<h4 class="    fw-bolder text-danger ">Diário	/Entrada</h4>50.000,00Kz
</div>
<div class="dropdown-divider"></div>
</div>
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Mensal</h4>3.000.000,00Kz
</div>	
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Semestral	</h4>18.000.000,00Kz
</div>
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Anual</h4>36.000.000,00Kz
</div>
<div class="dropdown-divider"></div>
<p class="text-dark fw-bolder text-dark small"> Ver retornos em
<a class="btn-primary" href="tabela.php"><span  class="btn btn-primary">Tabela</span></a>
				</p>
	<div class="text-center">		

<?php 
if (isset($_SESSION["id_user"])){
include("partkb.php");
}
?>
</div>

</div>	 </div>	</div>


<div class="col-lg-2">
<div class="card-header">
 <?php 
 	$result = "SELECT id_user COUNT FROM sorteiok WHERE  key1 = 100000 ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
	?>
		<div class="text-center ">
<div class="badge">
		<h4 class="    fw-bolder text-center text-danger ">Cabeças </h4>
	<div class="dropdown-divider"></div>00<?php echo $resulta;?>	
</div>
	<div class="dropdown-divider"></div>
<div class=" text-center ">
<div class="thumbnail">
<h4 class="    fw-bolder text-danger ">Diário	/Entrada</h4>100.000,00Kz
</div>
<div class="dropdown-divider"></div>
</div>
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Mensal</h4>6.000.000,00Kz
</div>	
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Semestral	</h4>36.000.000,00Kz
</div>
	<div class="badge text-center ">
	<h4 class=" round-circle    fw-bolder text-center text-danger ">Anual</h4>72.000.000,00Kz
</div>
<div class="dropdown-divider"></div>
<p class="text-dark fw-bolder text-dark small"> Ver retornos em
<a class="btn-primary" href="tabela.php"><span  class="btn btn-primary">Tabela</span></a>
				</p>
	<div class="text-center">		

<?php 
if (isset($_SESSION["id_user"])){
include("partkb.php");
}
?>
</div>
</div>	 </div>	</div>

 </div>
<?php } ?>
                                                                                
