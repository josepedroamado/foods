$(document).ready(inicializo);

var pagina=0;

function inicializo(){
    $("#btnAgregar").click(agregarAutor);
    $("#btnFiltrar").click(aplicarFiltro);
    $("#btnIni").click(cambioPagina);
    $("#btnAnt").click(cambioPagina);
    $("#btnSig").click(cambioPagina);
    $("#btnUlt").click(cambioPagina);
    //Cargo la primer página
    traigoAutores(1);
    //Llamo cada 1 segundo a traigoFecha
    //window.setInterval(traigoFechaHora,1000);
}

function agregarAutor(){
    window.location = "altaAutor.php";
}

function borrarAutor(){
    var id = $(this).attr("alt");
    if(confirm("Elimina Autor?")){
        window.location = "bajaAutor.php?id=" + id;
    }
}

function modifAutor(){
    var id = $(this).attr("alt");
    window.location = "modifAutor.php?id=" + id;
}

function cambioPagina(){
    var pag = $(this).attr("alt");
    traigoAutores(pag);
}

function aplicarFiltro(){
    traigoAutores(pagina)
}

function traigoFechaHora(){
    $.ajax({
        url: "fechaHora.php",
        type: "POST",
        dataType: "HTML",
        success: respuestaFechaHora
    });
}

function respuestaFechaHora(data){
    $("#fechaHora").html(data);
}

function traigoAutores(pPagina){
    var filtro = $("#filtro").val();
    pagina = parseInt(pPagina);
    $.ajax({
        url: "traigoAutores.php",
        dataType: "JSON",
        type: "POST",
        data: "pagina=" + pPagina + "&filtro=" + filtro,
        success: procesoRespuestaAutores
        
    });
}

function procesoRespuestaAutores(datos){
    var autores, tabla="", tmpAutor;
    if(datos["status"]=="OK"){
        //proceso los datos y muestro en la tabla
        autores = datos["data"];
        for(pos = 0; pos<=autores.length-1; pos++){
            tmpAutor = autores[pos];
            tabla = tabla + "<tr>";
            tabla = tabla + "<td>" + tmpAutor['nombre'] + "</td>";
            tabla = tabla + "<td>" + tmpAutor['especialidad'] + "</td>";
            tabla = tabla + "<td><img src='fotosautores/" + tmpAutor['foto'] + "' width='30px'/></td>";
            tabla = tabla + "<td>";
            tabla = tabla + "<input type='button' class='btnModificar' value='Modificar' alt='" + tmpAutor['id'] + "'/>";
            tabla = tabla + "<input type='button' class='btnBorrar' value='Borar' alt='" + tmpAutor['id'] + "'/>";
            tabla = tabla + "</td>";
            tabla = tabla + "</tr>";
        }
        $("#cuerpoTabla").html(tabla);
        $(".btnBorrar").click(borrarAutor);
        $(".btnModificar").click(modifAutor);
        $("#pagina").html(pagina);
        $("#pagUlt").html(datos["ultima"]);
        if(pagina-1>0){
            $("#btnAnt").attr("alt",(pagina-1));
        }
        else{
            $("#btnAnt").attr("alt",1);
        }
        if(pagina+1<datos["ultima"]){
            $("#btnSig").attr("alt",(pagina+1));
        }
        else{            
            $("#btnSig").attr("alt",datos["ultima"]);
        }
        $("#btnUlt").attr("alt",datos["ultima"]);
    }
    else{
        alert("Se produjo un error!");
    }
}