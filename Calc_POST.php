<?php
	include("Calc_POST.html");
	$x 	= $_POST['x'];
	$y 	= $_POST['y'];
	$op = $_POST['operacao'];
	
	function X_mais_Y(int $x, int $y) {
		return $x+$y;
	}
	function X_menos_Y(int $x, int $y) {
		return $x-$y;
	}
	function X_porcento_de_Y(int $x, int $y) {
		return ($x/100)*$y;
	}
	function raiz_Y_de_X(int $x, int $y) {
		return $x**(1/$y);
	}
	function X_vezes_Y(int $x, int $y) {
		return $x*$y;
	}
	function X_dividido_por_Y(int $x, int $y) {
		return $x/$y;
	}
	function inverso_de_X(int $x, int $y) {
		return 1/$x;
	}
	function X_elevado_a_Y(int $x, int $y) {
		return $x**$y;
	}

	if(!is_numeric($x) || !is_numeric($y) || empty($op))
	{
		echo "<font size='5'><strong>Erro! Existem campos vazios.</strong></font> ";
    }
	
	else if ((!$y)&&($op=="X / Y"))
	{
		echo "<font size='5'><strong>Não é possível realizar uma divisão por zero</strong></font>";
	}
	
	else eval ('echo '.$op($x,$y).';');
?>