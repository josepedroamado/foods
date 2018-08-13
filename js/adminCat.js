$(document).ready(inicializo);

var pagina=0;

function inicializo(){
    $("#btnFirst").click(cambioPagina);
    $("#btnPrev").click(cambioPagina);
    $("#btnNext").click(cambioPagina);
    $("#btnLast").click(cambioPagina);
    //Cargo la primer página
    getCats(1);
}

function cambioPagina(){
    var pag = $(this).attr("alt");
    getCats(pag);
}

function getCats(pPagina){
    pagina = parseInt(pPagina);
    $.ajax({
        url: "adminCatGet.php",
        dataType: "JSON",
        type: "POST",
        data: "pagina=" + pPagina,
        success: loadCats
    });
}

function loadCats(datos){
    var cats, tabla="", tmpCat;
    if(datos["status"]=="OK"){
        //proceso los datos y muestro en la tabla
        cats = datos["data"];
        for(pos = 0; pos<=cats.length-1; pos++){
            tmpCat = cats[pos];
            tabla = tabla + "<tr>";
            tabla = tabla + "<td>" + tmpCat['nombreCat']+ "</td>";
            tabla = tabla + "<td>" + 
                                "<form method='POST' action='adminCatDel.php'>" +
                                      "<input type='text' id='id' name='id' class='form-control' value='" + tmpCat['categoria_id'] + "' hidden>" +
                                      "<input type='submit' name='Eliminar' class='py-1 my-1 btn indigo darken-4 btn-sm m-0' value='Eliminar'>" +
                                "</form>" +
                                "<form method='POST' action='adminCatMod.php'>" + 
                                    "<input type='text' id='id' name='id' class='form-control' value='" + tmpCat['categoria_id'] + "' hidden>" +
                                    "<input type='submit' name='Modificar' class='py-1 my-1 btn indigo darken-4 btn-sm m-0 btnModifPub' value='Modificar'>" +
                                "</form>";
            tabla = tabla + "</tr>";                     
        }
        $("#tableBody").html(tabla);

        $("#currentPage").html(pagina);
        $("#lastPage").html(datos["ultima"]);

        if(pagina-1>0){
            $("#btnPrev").attr("alt",(pagina-1));
        }
        else{
            $("#btnPrev").attr("alt",1);
        }
        if(pagina+1<datos["ultima"]){
            $("#btnNext").attr("alt",(pagina+1));
        }
        else{            
            $("#btnNext").attr("alt",datos["ultima"]);
        }
        $("#btnLast").attr("alt",datos["ultima"]);
    }
    else{
        alert("Se produjo un error!");
    }
}