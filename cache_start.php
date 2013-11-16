<?php
//Algunos parametros de configuracion
$cachedir = '/home/web/Tutorias/'.$Theme.'cache/';
$cachetime = 3600; //keep cache files for 3600 seconds (1 hour)
//Pagina php
$thispage = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$cachelink = $cachedir.md5($thispage).".html";
if (@file_exists($cachelink)) {
	$cachelink_time = @filemtime($cachelink);
}else { $cachelink_time = 0; }

@clearstatcache();

if (time() - $cachetime < $cachelink_time) {	
	@readfile($cachelink);
	exit(); 
}

ob_start();
?> 