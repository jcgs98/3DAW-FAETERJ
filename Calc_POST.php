<?php
	include("Calc_POST.html");
	$x 	= $_POST['x'];
	$y 	= $_POST['y'];
	$op = $_POST['operacao'];

	if(!is_numeric($x) || !is_numeric($y) || empty($op))
	{
		echo "<font size='5'><strong>Erro! Existem campos vazios.</strong></font> ";
    }
	
	else if ((!$y)&&($op =="/")||(!$y)&&($op =="%"))
	{
        echo "<font size='5'><strong>Erro! Não é possível realizar uma divisão por zero.</strong></font> ";
	}
	
	else
	{
		$resultado="$x $op $y";
		echo "$x $op $y = ";
		eval ('echo '.$resultado.';');
	}
?>