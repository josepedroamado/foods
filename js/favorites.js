$(document).ready(inicializo);

var pagina=0;

function inicializo(){
    $("#btnFirst").click(cambioPagina);
    $("#btnPrev").click(cambioPagina);
    $("#btnNext").click(cambioPagina);
    $("#btnLast").click(cambioPagina);
    //Cargo la primer página
    getFavs(1);
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
    getFavs(pag);
}

function getFavs(pPagina){
    pagina = parseInt(pPagina);
    $.ajax({
        url: "favoritesGet.php",
        dataType: "JSON",
        type: "POST",
        data: "pagina=" + pPagina,
        success: loadFavs
    });
}

function loadFavs(datos){
    var favs, tabla="", tmpFav;
    if(datos["status"]=="OK"){
        //proceso los datos y muestro en la tabla
        favs = datos["data"];
        for(pos = 0; pos<=favs.length-1; pos++){
            tmpFav = favs[pos];
            var icon = "fa fa-sticky-note";
            if (tmpFav['tipo_id'] == 1) {
                icon = "fa fa-cutlery";
            }
            tabla = tabla + "<!-- Grid row -->";
            tabla = tabla +     "<div class='row'>";
            tabla = tabla +         "<!-- Grid column -->";
            tabla = tabla +         "<div class='col-lg-5 col-xl-4'>";
            tabla = tabla +             "<!-- Featured image -->";
            tabla = tabla +             "<div class=''>";
            tabla = tabla +                 "<img class='img-fluid view overlay rounded z-depth-1-half mb-lg-0 mb-4' src='img/" + tmpFav['imagen'] + "'>";
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
            tabla = tabla +                 "<h6 class='font-weight-bold mb-3'><i class='" + icon + "pr-2'></i>" + tmpFav['nombreCat'] + "</h6></a>";
            tabla = tabla +             "<!-- Post title -->"; 
            tabla = tabla +             "<h3 class='font-weight-bold mb-3'><strong>" + ucwords(tmpFav['titulo'].toLowerCase(), true) + "</strong></h3>";
            tabla = tabla +             "<!-- Excerpt -->";
            tabla = tabla +             "<p class='dark-grey-text'>" + truncateOnWord(tmpFav['texto'], 150) + "</p>";
            tabla = tabla +             "<!-- Post data -->";
            tabla = tabla +             "<p>escrito por <a class='font-weight-bold'>" + tmpFav['nombreUsr'] + " " + tmpFav['apellido'] + "</a>, " + tmpFav['fecha'] + "</p>";
            tabla = tabla +             "<!-- Read more button -->";
            tabla = tabla +             "<div class='row'>";
            tabla = tabla +                 "<form method='GET' action='post.php'>";
            tabla = tabla +                     "<input type='text' id='id' name='id' class='form-control' value='" + tmpFav['publicacion_id'] + "' hidden>";
            tabla = tabla +                     "<input type='submit' class='btn btn-primary btn-md p-2' name='submit' value='Leer más!'>";
            tabla = tabla +                 "</form>";
            tabla = tabla +                 "<form method='POST' action='favoriteDel.php'>";
            tabla = tabla +                     "<input type='text' id='id' name='id' class='form-control' value='" + tmpFav['publicacion_id']+ "' hidden>";
            tabla = tabla +                     "<input type='submit' class='btn btn-primary btn-md p-2' name='submit' value='Quitar'>";
            tabla = tabla +                 "</form>"; 
            tabla = tabla +             "</div>"; 
            tabla = tabla +         "</div>"; 
            tabla = tabla +         "<!-- Grid column -->";
            tabla = tabla +     "</div>";
            tabla = tabla +     "<!-- Grid row -->";
            tabla = tabla +     "<hr class='my-5'>";                         
        }
        $("#favoritos").html(tabla);

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