<?php
	include "../../config.ini.php";
	require_once("../../lib/DB_mysql.class.php");
	$miconexion = new DB_mysql($mySQLBBDD, $mySQLHost, $mySQLUser, $mySQLPass);
	$miconexion->conectar();
	if ($miconexion->Error) {
		echo json_encode(array("Error" => "Error al acceder a la BBDD. Intentelo mas tarde."));
		exit(1);
	}

	if($_POST['Accion']=='CargarNoticias'){
		$MaxReg=5;		//Maximo num. Registros a mostrar por pagina
		$min=0;
		$Pag=$_POST['Pagina'];

		if(!isset($_POST['Pagina']) || empty($_POST['Pagina'])){
			$Min = 0;
			$Pag = 1;
		}else{
			if($Pag == 1)
 				$Min = 0;
 			else{
 				$Min = $MaxReg * $Pag;
				$Min = $Min - $MaxReg;
 			}
		}

		$sql="SELECT Titulo, Noticia FROM Noticias WHERE Categoria='".$_POST['Categoria']."' ORDER BY Fecha DESC LIMIT ".$Min.", ".$MaxReg.";";
		$miconexion->consulta($sql);
		$Cad='';
		while($row =mysql_fetch_assoc($miconexion->Consulta_ID)){
			$Cad.="				<div class='panel panel-default'>\n";
			$Cad.="					<div class='panel-heading'>\n";
			$Cad.="						<h3 class='panel-title'>".$row['Titulo']."</h3>\n";
			$Cad.="					</div>\n";
			$Cad.="					<div class='panel-body'>\n";
			$Cad.="						".$row['Noticia']."\n";
			$Cad.="					</div>\n";
			$Cad.="				</div>\n";
		}
					
		$sql="SELECT Titulo FROM Noticias WHERE Categoria='".$_POST['Categoria']."';";
		$miconexion->consulta($sql);
		$Total=$miconexion->numregistros();
		$Paginacion='';
		if($Total>$MaxReg){
			if ($Pag!=1) $Paginacion="<li><a href='#' onclick='javascript: irPagina(".($Pag-1).");'>&laquo;</a></li>\n";
			for($i=1;$i<=ceil($Total/$MaxReg);$i++){
				$Paginacion.="					<li";
				if($i==$Pag) $Paginacion.=" class='active'";
				$Paginacion.="><a href='#' onclick='javascript: irPagina(".$i.");'>".$i."</a></li>\n";
			}
			if($Pag!=ceil($Total/$MaxReg)) $Paginacion.="					<li><a href='#' onclick='javascript: irPagina(".($Pag+1).");'>&raquo;</a></li>\n";
		}

		echo json_encode(array("Error" => "", "Noticias"=>$Cad, "Paginacion" => $Paginacion));
		exit();
	}
?>