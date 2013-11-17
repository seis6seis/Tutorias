var Pagina=1;
var Categoria='';

	
$( document ).ready(function() {
	$('.lstNoticias').each(function(indice, elemento) {
		if ($(this).hasClass("active")) {
			Categoria=$(this).attr("id");
			CargarNoticias(Categoria);
		}
	});
	
	$(".lstNoticias").click(function(){
		$('.lstNoticias').each(function(indice, elemento) {
			$(this).removeClass("active");
		});
		$(this).addClass("active");
		
		Categoria=$(this).attr("id");
		CargarNoticias(Categoria);
	});
});

function irPagina(Pag){
	Pagina=Pag;
	CargarNoticias(Categoria);
}

function CargarNoticias(ID){
	$.ajax({
		url: "js/ajax/noticias.php",
		type: "post",
		data: "Accion=CargarNoticias&Categoria="+ID+"&Pagina="+Pagina,
		dataType: 'json',
		success: function(datos){
			if(datos['Error']!='')
				alert(datos['Error']);
			else{
				$("#divNoticias").html(datos['Noticias']);
				$(".pagination").html(datos['Paginacion']);
			}
				
		},
		error:function(datos){
			alert("Error al intentar acceder a los datos.");
		}
	});
}