<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio lógicos dvlum</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>

	
	<div id="app">
	    <div class="row" style="margin-bottom: 0px;">
	        <div class="col-md-4">
	            
	        </div>
	        <div class="col-md-4"></div>
	        <div class="col-md-4 text-center">
	            <a href="index.php" style="font-family: arial; font-size: 1.5em; color: #00A946; vertical-align: bottom; padding-bottom: 0px; margin-bottom: 0px; text-decoration: none;">dvlum</a>
	        </div>
	    </div>
	</div>
	<nav class="navbar navbar-inverse" style="background-color: black;">
		<div class="container-fluid">
			<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
			</div>
		<!-- {{@date('d-m-Y')}}-->
			<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-2" aria-expanded="false" style="height: 1px;">
				<ul class="nav navbar-nav">
					<li class="dropdown">
			    		<a href="#" class="dropdown-toggle" style="font-family: arial; font-size: 1.5em; color: #fff;" data-toggle="dropdown" role="button" aria-expanded="false">Inicio</a>
			    		<ul class="dropdown-menu" role="menu">
			                <li><a href="#palindromo" id="palindromo">Palabras palíndromas</a></li>
			                <li class="divider"></li>
			                <li><a href="#parentesis" id="parentesis">Balance de paréntesis</a></li>
			    		</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="contenido" class="row">
		<div class="col-md-12">
			<div class="col-md-6">
				<h1 class="text-center">Palabrás palíndromas</h1>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6">
							<label>Seleccione un archivo</label>
						</div>
						<div class="col-md-6">
							<input id="archivoTXTPalindromos" type="file" name="">
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-striped table-hover" id="tablaResultadosPalindromos">
							<thead style="background-color: #AACED0">
						    	<tr>
						      		<th class="text-center">Palabra</th>
						      		<th class="text-center">Resultado</th>
						    	</tr>
						  	</thead>
						  	<tbody id="palindromos" style="overflow-y: scroll;">
						  	</tbody>
						</table>
					</div>	
				</div>
			</div>
			<div class="col-md-6">
				<h1 class="text-center">Balance de paréntesis</h1>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6">
							<label>Seleccione un archivo</label>
						</div>
						<div class="col-md-6">
							<input id="archivoTXTBalance" type="file" name="">
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-striped table-hover" id="tablaResultadosBalance">
							<thead style="background-color: #AACED0">
						    	<tr>
						      		<th class="text-center">Cadena</th>
						      		<th class="text-center">Resultado</th>
						    	</tr>
						  	</thead>
						  	<tbody id="balance" style="overflow-y: scroll;">
						  	</tbody>
						</table>
					</div>	
				</div>
			</div>
		</div>
	</div>
	


	<!--JQuery-->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="main.js"></script>
	
	 
</body>
</html>