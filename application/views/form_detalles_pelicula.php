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
	<?php
	
		foreach ($registros as $row)
        {
                echo $row->titulo;
                echo $row->categoria;
                
        }
	?>

</body>
</html>