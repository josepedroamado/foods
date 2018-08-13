$(document).ready(inicializo);

var pagina=0;

function inicializo(){
    $("#btnBuscarPublicacion").click(filter);
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

function filter(){
    getPubs(pagina);
}

function cambioPagina(){
    var pag = $(this).attr("alt");
    getPubs(pag);
}

function getPubs(pPagina){
    var cat = $("#cat").val();
    var type = $("#type").val();
    pagina = parseInt(pPagina);
    $.ajax({
        url: "publicationsGet.php",
        dataType: "JSON",
        type: "POST",
        data: "pagina=" + pPagina + "&cat=" + cat + "&type=" + type,
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
            var icon = "fa fa-sticky-note";
            if (tmpPub['tipo_id'] == 1) {
                icon = "fa fa-cutlery";
            }
            tabla = tabla + "<!-- Grid row -->";
            tabla = tabla +     "<div class='row'>";
            tabla = tabla +         "<!-- Grid column -->";
            tabla = tabla +         "<div class='col-lg-5 col-xl-4'>";
            tabla = tabla +             "<!-- Featured image -->";
            tabla = tabla +             "<div class=''>";
            tabla = tabla +                 "<img class='img-fluid view overlay rounded z-depth-1-half mb-lg-0 mb-4' src='img/" + tmpPub['imagen'] + "'>";
            tabla = tabla +                 "<a>"; 
            tabla = tabla +                     "<div class='mask rgba-white-slight'></div>";
            tabla = tabla +                 "</a>";
            tabla = tabla +             "</div>"; 
            tabla = tabla +         "</div>";
            tabla = tabla +         "<!-- Grid column -->";
            tabla = tabla +         "<!-- Grid column -->"; 
            tabla = tabla +         "<div class='col-lg-7 col-xl-8'>";
            tabla = tabla +             "<!-- Category -->";
            tabla = tabla +             "<a class='pink-text'>"; 
            tabla = tabla +                 "<h6 class='font-weight-bold mb-3'><i class='" + icon + " pr-2'></i>" + tmpPub['nombreCat'] + "</h6></a>";
            tabla = tabla +             "<!-- Post title -->"; 
            tabla = tabla +             "<h3 class='font-weight-bold mb-3'><strong>" + ucwords(tmpPub['titulo'].toLowerCase(), true) + "</strong></h3>";
            tabla = tabla +             "<!-- Excerpt -->";
            tabla = tabla +             "<p class='dark-grey-text'>" + truncateOnWord(tmpPub['texto'], 150) + "</p>";
            tabla = tabla +             "<!-- Post data -->";
            tabla = tabla +             "<p>escrito por <a class='font-weight-bold'>" + tmpPub['nombreUsr'] + " " + tmpPub['apellido'] + "</a>, " + tmpPub['fecha'] + "</p>";
            tabla = tabla +             "<!-- Read more button -->";
            tabla = tabla +             "<div class='row'>";
            tabla = tabla +                 "<form method='GET' action='post.php'>";
            tabla = tabla +                     "<input type='text' id='id' name='id' class='form-control' value='" + tmpPub['publicacion_id'] + "' hidden>";
            tabla = tabla +                     "<input type='submit' class='btn btn-primary btn-md p-2 indigo darken-4' name='submit' value='Leer más!'>";
            tabla = tabla +                 "</form>";
            tabla = tabla +             "</div>"; 
            tabla = tabla +         "</div>"; 
            tabla = tabla +         "<!-- Grid column -->";
            tabla = tabla +     "</div>";
            tabla = tabla +     "<!-- Grid row -->";
            tabla = tabla +     "<hr class='my-5'>";              
          
        }
        $("#contentAJAX").html(tabla);

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