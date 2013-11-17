<?php
	$Pagina="noticias";
	$TituloPagina="Noticias";
	include "header.php";
	require_once("lib/DB_mysql.class.php");
	//Configura la BBDD
	$miconexion = new DB_mysql($mySQLBBDD, $mySQLHost, $mySQLUser, $mySQLPass);
	$miconexion->conectar();
	if ($miconexion->Error) echo "Error acceso a la BBDD. ".$miconexion->Error."\n";
?>

	<div class="container container-start">		
		<div class="row">
			<div id="sidebar" class="col-xs-6 col-sm-3" role="navigation">
				<div class="list-group">
<?php
	$sql="SELECT ID, Categoria FROM CategoriaNoticias WHERE Empresa='".$Empresa."'";
	$miconexion->consulta($sql);
	$Cont=0;
	while($row =mysql_fetch_assoc($miconexion->Consulta_ID)){
		echo "					<a class='list-group-item lstNoticias";
		if ($Cont==0) { echo " active"; $Cont=1; }
		echo "' href='#' id='".$row['ID']."'>".$row['Categoria']."</a>\n";
	}
?>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-9 sidebar-offcanvas">
				<!-- Comienzo del contenido de la pagina 
				<button type="button" class="btn btn-default btn-sm">por Categoria</button>
				<button type="button" class="btn btn-default btn-sm">por Fecha</button>
				-->

				<!-- Comienzo del contenido de la pagina -->
				<div id="divNoticias"></div>
				<!-- Fin del contenido de la pagina -->
				<ul class="pagination">
				</ul>
			</div>

		</div>
	</div> 
<?php
	include "footer.php";
?>
