<?php
    include("Calc_GET.html");
    $x	= $_GET['x'];
    $y	= $_GET['y'];
    $op = $_GET['operacao'];

	if(!is_numeric($x) || !is_numeric($y) || empty($op))
	{
		echo "<font size='5'><strong>Erro! Existem campos vazios.</strong></font>";		
    }

	else if ((!$y)&&($op =="/")||(!$y)&&($op =="%"))
	{
		echo "<font size='5'><strong>Não é possível realizar uma divisão por zero</strong></font>";
    }

	else
	{
		$resultado 	=	(	$op	==	"+"	)	? (	$x 	+ 	$y )  	:
						((	$op	==	"-"	)	?	$x 	- 	$y	    :
						((	$op	==	"*"	)	?	$x 	* 	$y	    :
						((	$op	==	"%"	)	?	$x 	% 	$y	    :
						((	$op	==	"**")	?	$x 	**	$y		:
												$x 	/ 	$y))))	;

		echo "<font size='5'><strong>Resultado de $x $op $y = $resultado.</strong></font>";
	}

?>