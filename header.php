<?php
	include "config.ini.php";
	include "cache_start.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Fco. Javier Martínez">
	<link rel="shortcut icon" href="<?php echo $Theme; ?>img/favicon.ico">
	<title><?php echo $TituloPagina." &middot; Tutorias ".$Empresa; ?></title>

	<!-- CSS -->
	<link href="<?php echo $Theme;?>css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo $Theme;?>css/general.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Tutorias <?php echo $Empresa; ?></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
<?php
	echo "					<li";
	if ($Pagina=='index') echo " class='active'";
	echo "><a href='index.php'>Inicio</a></li>\n";
	echo "					<li";
	if ($Pagina=='informacion') echo " class='active'";
	echo "><a href='informacion.php'>Información</a></li>\n";
	echo "					<li";
	if ($Pagina=='manuales') echo " class='active'";
	echo "><a href='manuales.php'>Manuales</a></li>\n";
	echo "					<li";
	if ($Pagina=='webcast') echo " class='active'";
	echo "><a href='webcast.php'>Webcast</a></li>\n";
	echo "					<li";
	if ($Pagina=='videos') echo " class='active'";
	echo "><a href='videos.php'>Videos</a></li>\n";
?>
				</ul>
			</div><!--/.navbar-collapse -->
		</div>
	</div>
