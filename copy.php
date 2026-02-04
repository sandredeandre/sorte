


		
		
	<div class="small fst-italic btn-dark fixed-bottom">
<?php if (isset($_SESSION['id_user'])){ ?>

<div class="text-end ">
	
		<div class="text-center">
	
      <nav class="navbar navbar-expand navbar-danger  bg-dark">
	                   
 <a href="index.php"
 title="Pagina Inicial"  data-trigger="hover" data-content="Some content"
 
 ><span class="rounded-circle end-50 icon fw-bolder text-light active"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="house" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg>

</span></a>     

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navb" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="person-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 tepes7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>

</svg></span>
        </button>
		<span class="navbar-toggler"  data-toggle="collapse" data-target="#Collapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" >
		 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="arrow-down-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
</svg> </span>
		 		<span class="navbar-toggler"  data-toggle="collapse" data-target="#collapsesms" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" >


<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="chat-fill" viewBox="0 0 16 16">
  <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
</svg> </span>
            <div class="collapse navbar-collapse" id="navb">

       
<ul class="nav justify-content-end top-50 "
style="z-index: 1086;">
	
	
<?php
$id_user= $_SESSION['id_user'] ; 
$result = "SELECT id_user COUNT FROM winner WHERE  id_user ='$id_user' ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
			if(!empty($resulta >= 1)){ ?>
	
		<div class="text-center ">
		<small class="sup">
		<strong class="text-light text-bolder"> <div class="badge btn-danger"
			title="Participantes"  data-trigger="hover" data-content="Some content"
			>  <?php echo $resulta?> </strong></div> </div></small> 

<span 
	title="Sorteiados"  data-trigger="hover" data-content="Some content"
  data-toggle="modal" data-target="#myModal6">

<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="gift" viewBox="0 0 16 16">
  <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"/>
</svg>
</span>
	
	 <?php } else { 
		 ?>
		 	
		 <span 
	title="Sorteiados"  data-trigger="hover" data-content="Some content"
  data-toggle="modal" data-target="#myModal6">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="alarm" viewBox="0 0 16 16">
  <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
  <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
</svg>
</span>
		 <?php } 
		 ?>


	<?php
$result = "SELECT id_user COUNT FROM winbackup WHERE  key1 AND id_user ='$id_user' ";
		$resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
		if(!empty($resulta >= 1)){ 	
			?>
		<div class="text-center ">
		<small class="sup">
		<strong class="text-light text-bolder"> <div class="badge btn-danger"
			title="Participantes"  data-trigger="hover" data-content="Some content"
			>  <?php echo $resulta?> </strong></div> </div></small> 
	
							<?php
include ("trophy.php");  
} else { 
	include ("trophy.php"); 	 
	} 
		 ?>
 



 
	
	

	
	                                         
		


	<span  title="Meus dados"  data-trigger="hover" data-content="Some content"
		
	id="Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>
</span>

	<div class="dropdown-menu" aria-labelledby="Dropdown">
						
			
		<a href="perfi.php"><span class="rounded-circle end-50 icon text-danger"><span >
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="file-earmark-person" viewBox="0 0 16 16">
  <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
</svg>
</span>Perfil</span></a>   	
		<div class="dropdown-divider"></div>
		<span  >
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="cash-coin" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
</svg>
</span>Saldo 
<?php

require("sal.php");
?> 

</ul>


<!-- Usar. Este mensagem-->






</ul>
</nav>

    <nav class="  bg-danger  text-center">  

       
       0035 - Shopping ©  <script>

var data=new Date();



document.write( + ano );

</script>

  Direitos reservados.  Produt of <a
target="_blank" rel="noopener noreferrer"
 href="https://www.app.ao"><span  class="link text-dark" >App</span></a>  
Powered by <a
target="_blank" rel="noopener noreferrer"
 href="https://www.facebook/wakengesanda"><span  class="link text-light" >Paul, Andre Phernandez</span></a>
      </nav>

	</div> </footer>

<?php }else{?>


    <nav class="  bg-danger  text-center">  

       0035 ©  <script>

var data=new Date();
document.write( + ano );

</script>

  Direitos reservados.   Produt of <a
target="_blank" rel="noopener noreferrer"
 href="https://www.app.ao"><span  class="link text-dark" >App</span></a>  
Powered by <a
target="_blank" rel="noopener noreferrer"
 href="https://www.facebook/wakengesanda"><span  class="link text-dark" >Paul, Andre Phernandez</span></a>  

      </nav>

	</div> </footer>
<?php }?>

  <!-- Principal JavaScript e css do Bootstrap

    ================================================== -->
<link href="css/dialo.css" rel="stylesheet" type="text/css" media="screen">

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bundle.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script> <script type="text/javascript" src="js/
holder.min.js"></script> 
<script type="text/javascript" src="js/
jquery.slim.min.js"></script>

 <script src="js/popper.min.js"></script>
  <script src="js/dialo.js"></script>
</body></html>
