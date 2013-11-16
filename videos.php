<?php
	$Pagina="videos";
	$TituloPagina="Videos";
	include "header.php";
	require_once("lib/DB_mysql.class.php");
	//Configura la BBDD
	$miconexion = new DB_mysql($mySQLBBDD, $mySQLHost, $mySQLUser, $mySQLPass);
	$miconexion->conectar();
	if ($miconexion->Error) echo "Error acceso a la BBDD. ".$miconexion->Error."\n";
	$sql="SELECT TituloPagina, ContenidoHTML FROM Pagina WHERE Empresa='".$Empresa."' AND NombreCorto='".$Pagina."'";
	$miconexion->consulta($sql);
	$bbddPagina =mysql_fetch_assoc($miconexion->Consulta_ID);
?>
			
	<div class="row">
		<div class="col-lg-12 Panel_Central">

					<!-- Comienzo del contenido de la pagina -->

					<!-- Fin del contenido de la pagina -->

		</div>
	</div> 
<?php
	include "footer.php";
?>
