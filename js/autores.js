$(document).ready(inicializo);

function inicializo(){
	$("#btnAgregar").click(agregarAutor);
	$(".btnBorrar").click(borrarAutor);
	$(".btnModificar").click(modifAutor);
}

function agregarAutor(){
	window.location = "altaAutor.php";
}

function borrarAutor(){
	var id = $(this).attr("alt");
	window.location = "bajaAutor.php?id="+id;
}

function modifAutor(){
	var id = $(this).attr("alt");
	window.location = "modifAutor.php?id="+id;
}