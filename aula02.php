<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Aula 02</title>
</head>
<body>
	<?php
	/*
	INTEIROS(int) - Qualquer número sem decimais positivo ou negativo 
	PONTO FLUTUANTE (float, double,  ou real) - Número com decimais
	STRING - texto
	BOOLEANOS - Verdadeiro (TRUE) ou falso (FALSE)
	ARRAYS - Variáveis multidimensionais, vetores
	OBJETOS - instância de uma classe 
	RECURSOS - Variáveis especiais do PHP que referenciam recursos externos 
	NULO (null) - Variáveç sem nenhum valor, porém é diferente de ""
	*/ 


	$idade = "30";
	$idade2 = "17";
	$altura = 1.81;
	$nome = "Laisa";
	$casada = false;

	$numero = 50;

	define('CONFIG', 1500);
	//echo CONFIG;

	function calc(){
		global $numero;
		echo $numero;
	}

	calc();

	/*
	echo $idade;
	print($nome);
	echo gettype($idade);
	echo $idade + $idade2;
	echo "Olá, meu nome é $nome e tenho $idade2 anos.";
	*/

	/*
	$cadastro = array('Cliente 1', 'Cliente 2', 'Cliente 3');
	$cadastro[] = 'Cliente 1';
	$cadastro[] = 'Cliente 2';
	$cadastro[] = 'Cliente 3';
	$cadastro = array('Cliente 1' => 'Laisa', 'Cliente 2 ' => 'Manu');]

	$cadastro = array(
		'Cliente1' => array(
			'nome' => 'Laisa',
			'idade' => 17,
		),
		'Cliente2' => array(
			'nome' => 'Manu',
			'idade' => 30,
		),
	);
	*/

	//var_dump($cadastro);
	//echo $cadastro['Cliente1']['nome'];


	?>
</body>
</html>
