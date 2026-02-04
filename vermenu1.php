
      <div class="row">
        <nav class="col-md-2 col-md-2  ml-sm-2  col-lg-2  px-2 btn-danger sidebar  d-inline-flex d-md-inline navbar-expand-sm d-flex shadow">
		
          <div class="sidebar-sticky">
         <div class="text-center">
		 <?php	if($_SESSION['id_user']){
$id_user = $_SESSION['id_user'];
	$result_usuario = "SELECT img FROM user WHERE id = '$id_user' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		if($resultado >= 1){
			
			?>
			 <div class="text-center">
			  
			<img width="100" class="rounded-circle img-thumbnail" src="../img/<?php echo $img =$resultado['img'];?>" data-toggle="collapse" data-target="#se" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			 </div>
		
	  <?php	}
	}else {
		 ?> 
		 <div class="text-center">
			  
			<img width="100" class="rounded-circle img-thumbnail" src="../img/logo.PNG" data-toggle="collapse" data-target="#se" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			 </div>
			
	  <?php	}

		?> 
			 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#se" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="bi bi-chevron-bar-down"></span>
        </button>
			 
			  <div class="collapse navbar-collapse" id="se">
			<ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link text-light" href="./index.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Home </a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link text-light" href="eu.php"> Levantamentos</a>
  
  </li>
          <li class="nav-item">
                <a class="nav-link text-light" href="euv.php">Vendas</a>
  
  </li>         
  <li class="nav-item">
                <a class="nav-link text-light" href="eus.php">Colocados</a>
  
  </li>  
  <li class="nav-item">
                <a class="nav-link text-light" href="eusa.php">Recargas</a>
  
  </li>
 </li>  
  <li class="nav-item">
                <a class="nav-link text-light" href="euk.php">Kixikila</a>
  
  </li>
            </ul>
 </div>
			 
          </div>
        </nav>
