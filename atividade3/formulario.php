<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Formulário</title>
	</head>

	<body>
		<h1>Dados Recebidos</h1><br>

		<?php
			if(isset($_POST["nome"]) == true){
			$nome = $_POST["nome"];
			echo ("Nome: ".$nome. "<br>");
			}

			if(isset($_POST["sexo"]) == true){
			$sexo = $_POST["sexo"];
			echo ("Sexo: ".$sexo. "<br>");
			}

			if(isset($_POST["olho"]) == true){
				$olho = $_POST["olho"];
				echo ("Cor dos olhos: ".$olho. "<br>");
			}

			if(isset($_POST["check"]) == true){
				$vetorcheck = $_POST["check"];
				echo ("Opções que se aplicam a pessoa: ".count($vetorcheck)." opções". "<br>");
				foreach ($vetorcheck as $check){
					echo (" ".$check."<br>");
				}
			}

			if(isset($_POST["texto"]) == true){
				$texto = $_POST["texto"];
				echo ("Habilidade Atlética: ".$texto. "<br>");
			}
		?>

	</body>
</html>
