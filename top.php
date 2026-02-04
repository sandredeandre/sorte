
<div class="fixed-top  "style=" top:21%; left:0;z-index:99999">
	 <span class=" text-danger fixed-top text-end" type="button" title="Vencedores"  data-trigger="hover" data-content="Some content"
data-toggle="modal" data-target="#vet" style="top: 18%; left: 90%">
<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg>

 </span>
	 <div class="dropdown " >
	 
	<span   class="btn btn-danger" style="top: 20%" 
	id="Dropdow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-dismiss="dropdownt" >
		
	<img src="../img/menu.png" width="24"e height="24" fill="currentColor" class="justify" >



</span>

  
	  <ul class="dropdown-menu  "  style="top:0%; background-color:#343a40;"> 
		
<?php 
include_once ("inc.lg.php"); ?>
<hr>
 
	 
 <li class="dropdown-item">
<a  href="partk.php"
 title="kixikila"  data-trigger="hover" data-content="Some content"> <img src="../img/sortk.png" width="30" height="30" fill="currentColor" class="img" ><span class="text-danger " >365 - kixikila</span></a>

</li>

	
 <li class=" dropdown-item">
 <a  href="sortd.php"
 title="valores"  data-trigger="hover" data-content="Some content">

 
<img src="../img/sortd.png" width="30" height="30" fill="currentColor" class="img" >
<span class="text-danger">Valores</span></span></a> 
</li>
		 <li class=" dropdown-item">
 <a  href="vet.php"
 title="trocas"  data-trigger="hover" data-content="Some content">
<img src="../img/tev.png" width="28" height="28" fill="currentColor" class="img" >
 <span class="text-danger">
Trocas </span></span></a> 
</li> 
		 <li class=" dropdown-item">
 <a  href="sortp1.php"
 title="produtos"  data-trigger="hover" data-content="Some content">
<img src="../img/sortp.png" width="28" height="28" fill="currentColor" class="img" >
<span class="text-danger">

Produtos </span></a> 
</li>
  <li class=" dropdown-item">
 <a  href="../lv/"
 title="produtos"  data-trigger="hover" data-content="Some content">
<img src="../img/logo.png" width="28" height="28" fill="currentColor" class="img" >
<span class="text-danger">

Shoping </span></a> 
</li>
 <li class=" dropdown-item">
 <a  href="../gm/"
 title="Jogo"  data-trigger="hover" data-content="Some content">
<img src="../gm/game/logo.png" width="28" height="28" fill="currentColor" class="img" >
<span class="text-danger">

Luvuama game</span></a> 
</li>
 <li class=" dropdown-item">
 <a  href="../z6/"
 title="Jogo"  data-trigger="hover" data-content="Some content">
<img src="../z6/game/z-6log.png" width="28" height="28" fill="currentColor" class="img" >
<span class="text-danger">

Z-6</span></a> 
</li>
<?php 
if (!empty($_SESSION['id_user'] && $_SESSION['usuarioNiveisAcessoId'] =="2" ||"3")){
 ?>
 <li class=" dropdown-item">
 <a  href="vet200off.php"
 title="Jogo"  data-trigger="hover" data-content="Some content">
<img src="../img/vet200off.png" width="28" height="28" fill="currentColor" class="img" >
<span class="text-danger">

Engorda  </span></a> 
</li>
<?php 
} ?>
</ul>
</div>
	</div>
	<?php 
include_once ("listinst.php"); ?>