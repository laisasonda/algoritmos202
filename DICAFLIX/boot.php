<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DICAFLIX</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<?php
		$csvFile = file('netflix_titles.csv');
            $paises = [];
            $classificacoes = [];
                
            foreach ($csvFile as $line) {
                $umRegistro = str_getcsv($line); //cada linha é um registro

                if (!empty($umRegistro[5])){
                    $arrayPaises = str_getcsv($umRegistro[5]);  //todos os países da linha são salvos

                    foreach($arrayPaises as $umPais ){
                        if( in_array($umPais, $paises) == false && $umPais != "") {
                            $paises[] = $umPais;
                        }    
                    }
                }
            }

            sort($paises);
        ?>

        
	<div id="jumbotron2"class="jumbotron jumbotron-fluid"><br><br>
		<div class="container">
		    <h1 class="display-4">Sugestões de filmes e séries na Netflix</h1>
		    <p class="lead">Preencha o formulário abaixo para encontrar sugestões compatíveis com seu gosto.</p>
		</div><br>
	</div>

	<form action="dicaflix.php" id="form" name="formulario" method="post">

		<div class="form-check">
			<input class="form-check-input" type="radio" name="tipo" value="Movie" id="flexRadioDefault1" checked>
            <label class="form-check-label" for="flexRadioDefault1">Filme</label>
		</div>

		<div class="form-check">
			<input class="form-check-input" type="radio" name="tipo" value="TV Show" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">Série</label><br>


		</div><br>
		<select class="form-select form-select-sm" aria-label=".form-select-sm example" name="nacionalidade">
	    	<?php
                foreach($paises as $umPais){
                    echo("<option value='" . $umPais . "'>" . $umPais . "</option>");
                }
            ?>
	    </select><br>

	    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="lancamento">
				  <option value="2021">2021</option><br>
				  <option value="2020">2020</option><br>
				  <option value="2019">2019</option><br>
				  <option value="todos">Todos</option><br>
	    </select><br>

	    <button name="btnenviar" type="submit" class="btn btn-outline-dark" id="button" href="dicaflix.php">Pesquisar</button>
	</form>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>