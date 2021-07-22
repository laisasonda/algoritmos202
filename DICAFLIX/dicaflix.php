<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>DICAFLIX</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<body>
		<div id="jumbotron2"class="jumbotron jumbotron-fluid"><br>
			<div class="container">
			    <h1 class="display-4">Essa é a nossa sugestão para você:</h1>
			</div><br>
		</div>

		<?php

			$possibilidades = [];
			$ano = false;

			$csvFile = file('netflix_titles.csv');

			if(isset($_POST["tipo"]) == true){
	        		$tipo = $_POST["tipo"];
	        	}

	        if(isset($_POST["nacionalidade"]) == true){
	        		$nacionalidade = $_POST["nacionalidade"];
	        	}

	        if(isset($_POST["lancamento"]) == true){
	        		$lancamento = $_POST["lancamento"];
	        	}
			

			foreach ($csvFile as $line) {
        		$umRegistro = str_getcsv($line);

        		if(!empty($umRegistro[7])){

        			if($lancamento == "todos"){
						if($umRegistro[7] != "2021" && $umRegistro[7] != "2020" && $umRegistro[7] != "2019"){
	        			$ano = true;
	        			}
	        		}
	        		else{
	        			if($umRegistro[7] == $lancamento){
	        			$ano = $umRegistro[7];
	        			}
	        		}
	       		}

        		if(!empty($umRegistro[5])){
        			$pais = ltrim($nacionalidade);
        			$pais = strpos($umRegistro[5],$pais); //para ver se tem o pais dentro dalista que foi selecionada, mesmo que ele n esteja sozinho
        			if($umRegistro[1] == $tipo && $umRegistro[5] == $pais && $umRegistro[7] == $ano){
        				$possibilidades[] = $umRegistro;
        			}
        		}
        	}

			if(!empty($possibilidades)){
        		$sugestao = $possibilidades[rand(0, count($possibilidades))];
        	}
			

        	if(!empty($sugestao)){
        		echo("<b>".$sugestao[2]."</b>"."<br>");
        	}

        	if(!empty($sugestao)){
        		echo("Sobre a obra:<br>");
			    echo("nacionalidade: " . $sugestao[5]."<br>");
			    echo("Lançamento: " . $sugestao[7]."<br>");
			    echo("Diretor(es): " . $sugestao[3]."<br>");
			    echo("Ator(es): " . $sugestao[4]."<br>");
			    echo("Duração: " . $sugestao[9]."<br>");
			    echo("Sobre: " . $sugestao[11]."<br>");
        	}

        	else{
        		echo("Nada encontrado");
        	}
		?>

		<img id = "img" src="img/fitadecinema.png" class="img-fluid" alt="fita de cinema">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>