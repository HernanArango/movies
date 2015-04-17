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
	<form class="form-horizontal" action="registrar" method="POST">
		
	<fieldset>

	<!-- Form Name -->
	<legend>Registrar Pélicula</legend>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="Titulo">Titulo</label>  
	  <div class="col-md-4">
	  <input id="titulo" name="titulo" placeholder="Ingrese titulo" class="form-control input-md" type="text">
	    
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="selectbasic">Categoría</label>
	  <div class="col-md-4">
	    <select id="categoria" name="categoria" class="form-control">
	      <option value="accion">Acción</option>
	      <option value="fantasia">Fantasía</option>
	    </select>
	  </div>
	</div>

	<!-- File Button --> 
	<div class="form-group">
	  <label class="col-md-4 control-label" for="archivo">Subir</label>
	  <div class="col-md-4">
	    <input id="archivo" name="archivo" class="input-file" type="file">
	  </div>
	</div>

	<!-- Button -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="singlebutton"></label>
	  <div class="col-md-4">
	    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Enviar</button>
	  </div>
	</div>

	</fieldset>
	</form>

</body>
</html>