<?php
    include("Calc_GET.html");
    $x	= $_GET['x'];
    $y	= $_GET['y'];
    $op = $_GET['operacao'];
	
	function soma(int $x, int $y) {
		return $x+$y;
	}
	function subt(int $x, int $y) {
		return $x-$y;
	}
	function porc(int $x, int $y) {
		return ($x/100)*$y;
	}
	function raiz(int $x, int $y) {
		return $x**(1/$y);
	}
	function mult(int $x, int $y) {
		return $x*$y;
	}
	function divi(int $x, int $y) {
		return $x/$y;
	}
	function inve(int $x, int $y) {
		return 1/$x;
	}
	function pote(int $x, int $y) {
		return $x**$y;
	}
	
	if (!is_numeric($x) || !is_numeric($y) || empty($op))
	{
		echo "<font size='5'><strong>Erro! Existem campos vazios.</strong></font>";		
    }
	
	else if ((!$y)&&($op=="X / Y"))
	{
		echo "<font size='5'><strong>Não é possível realizar uma divisão por zero</strong></font>";
	}	
	
	else 	
	{
		echo	(	$op=="X + Y")	?(	"$x + $y			=	".soma($x,$y) 	)		:
				((	$op=="X - Y")	?	"$x - $y 			=	".subt($x,$y)	   		:
				((	$op=="X * Y")	?	"$x * $y 			=	".mult($x,$y)	  	 	:
				((	$op=="X % de Y")?	"$x % de $y			=	".porc($x,$y)	   	 	:
				((	$op=="Y √ X")	?	"<sup>$y</sup>√ $x 	=	".raiz($x,$y)	   	 	:
				((	$op=="X / Y")	?	"$x / $y  			=	".divi($x,$y)		    :
				((	$op=="1 / X")	?	"1 / $x 			=	".inve($x,$y)			:
										"$x <sup>$y</sup> 	=	".pote($x,$y)	))))))	;

		
	}

?>