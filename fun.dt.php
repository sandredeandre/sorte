<?php
 $datai = $resulta['datai'];



function diasQuant(&$datai) {
	$dataf = date("Y/m/d");
    $diferenca = strtotime($dataf) - strtotime($datai);
    $dias = floor($diferenca / (60 * 60 * 24)); 
    return $dias;
}

?>
