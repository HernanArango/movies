<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<title>Peliculas</title>
</head>
<body>
	
	<div>
		<?php foreach ($registros as $row){?>
			<label>Titulo: </label><?= $row->titulo ?></br>
			<label>Categoria: </label><?= $row->categoria ?></br>
                                
        <?php } ?>
        
		<label>Año: </label><?= $anio ?></br>
		<label>Director: </label><?= $director ?></br>
        <label>Escritor: </label><?= $escritor ?></br>
        <label>País: </label><?= $pais ?></br>
		<label>Actores: </label><?= $actores ?></br>
		<image src="<?= $imagen ?>"></a>
	</div>
</body>
</html>
