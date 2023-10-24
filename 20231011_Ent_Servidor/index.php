<?php 
	
    //Crear una COOKIE que acumuli el n de clics que es fan amb el botó.

	$num = 0;

	// si no existe la cookie, cookie=0
	if( !isset($_COOKIE["numero"])){
		setcookie("numero", "0", time() + (86400 * 30), "/");
	}else{
		$num = $_COOKIE["numero"];
	}

	// si existe $_GET (he clicado), cookie+1
	if( isset($_GET["c"]) ){
		$num++;
		setcookie("numero", $num, time() + (86400 * 30), "/");
	}	

	if( isset($_GET["reset"])){
		setcookie("numero", "0", time() + (86400 * 30), "/");
		$num=0;
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container pt-4">

	<main class="text-center">
		<div>
			<a href="./?c"><button class="btn btn-success">Click</button></a>
		</div>
		<div>
			<h1><?= $num ?> clicks hechos</h1>
			<a href="./?reset">
				<small>reset</small>
			</a>
		</div>
	</main>

</body>
</html>