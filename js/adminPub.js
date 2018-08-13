$(document).ready(inicializo);

var pagina=0;

function inicializo(){
    $("#btnFirst").click(cambioPagina);
    $("#btnPrev").click(cambioPagina);
    $("#btnNext").click(cambioPagina);
    $("#btnLast").click(cambioPagina);
    //Cargo la primer página
    getPubs(1);
}

function ucwords(str,force){
  str=force ? str.toLowerCase() : str;  
  return str.replace(/(\b)([a-zA-Z])/g,
           function(firstLetter){
              return   firstLetter.toUpperCase();
           });
}

function truncateOnWord(str, limit) {
    var trimmable = '\u0009\u000A\u000B\u000C\u000D\u0020\u00A0\u1680\u180E\u2000\u2001\u2002\u2003\u2004\u2005\u2006\u2007\u2008\u2009\u200A\u202F\u205F\u2028\u2029\u3000\uFEFF';
    var reg = new RegExp('(?=[' + trimmable + '])');
    var words = str.split(reg);
    var count = 0;
    return words.filter(function(word) {
        count += word.length;
        return count <= limit;
    }).join('');
}

function cambioPagina(){
    var pag = $(this).attr("alt");
    getPubs(pag);
}

function getPubs(pPagina){
    pagina = parseInt(pPagina);
    $.ajax({
        url: "adminPubGet.php",
        dataType: "JSON",
        type: "POST",
        data: "pagina=" + pPagina,
        success: loadPubs 
    });
}

function loadPubs(datos){
    var pubs, tabla="", tmpPub;
    if(datos["status"]=="OK"){
        //proceso los datos y muestro en la tabla
        pubs = datos["data"];
        for(pos = 0; pos<=pubs.length-1; pos++){
            tmpPub = pubs[pos];
            tabla = tabla + "<tr>";
            tabla = tabla + "<td>" + ucwords(tmpPub['titulo'].toLowerCase(), true) + "</td>";
            tabla = tabla + "<td>" + truncateOnWord(tmpPub['texto'], 150) + "...</td>";
            tabla = tabla + "<td>" + tmpPub['fecha'] + "</td>";
            tabla = tabla + "<td><img src='img/" + tmpPub['imagen'] + "' width='100px' class='view overlay rounded z-depth-1-half mb-lg-0 mb-4'></td>";
            tabla = tabla + "<td>" + tmpPub['nombreCat'] + "</td>";
            tabla = tabla + "<td>" + tmpPub['nombreTipo'] + "</td>";
            tabla = tabla + "<td>" + tmpPub['nombreUsr'] + " " + tmpPub['apellido'] + "</td>";
            tabla = tabla + "<td>" + 
                                "<form method='GET' action='adminPubDel.php'>" +
                                      "<input type='text' id='id' name='id' class='form-control' value='" + tmpPub['publicacion_id'] + "' hidden>" +
                                      "<input type='submit' name='Eliminar' class='py-1 my-1 btn indigo darken-4 btn-sm m-0' value='Eliminar'>" +
                                "</form>" +
                                "<form method='GET' action='adminPubMod.php'>" + 
                                    "<input type='text' id='id' name='id' class='form-control' value='" + tmpPub['publicacion_id'] + "' hidden>" +
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