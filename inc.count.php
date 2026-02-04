<?php $resultado = mysqli_query($conn, $result);
		$resulta = mysqli_num_rows($resultado);
if (isset($resulta)){
	?>
		<div class="text-center ">
		<h4 class="badge    fw-bolder text-center text-danger "><?php echo $resulta;?>	</h4>
</div>
<?php } else{?>
	<div class="text-center ">
		<h4 class="badge    fw-bolder text-center text-danger ">0</h4>
<?php
}?>
