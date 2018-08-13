$(document).ready(inicializo);

var pagina=0;

function inicializo(){
    $("#btnFirst").click(cambioPagina);
    $("#btnPrev").click(cambioPagina);
    $("#btnNext").click(cambioPagina);
    $("#btnLast").click(cambioPagina);
    //Cargo la primer página
    getUsers(1);
}

function cambioPagina(){
    var pag = $(this).attr("alt");
    getUsers(pag);
}

function getUsers(pPagina){
    pagina = parseInt(pPagina);
    $.ajax({
        url: "adminUsrGet.php",
        dataType: "JSON",
        type: "POST",
        data: "pagina=" + pPagina,
        success: loadUsers  
    });
}

function loadUsers(datos){
    var usrs, tabla="", tmpUsr;
    if(datos["status"]=="OK"){
        //proceso los datos y muestro en la tabla
        usrs = datos["data"];
        for(pos = 0; pos<=usrs.length-1; pos++){
            tmpUsr = usrs[pos];
            tabla = tabla + "<tr>";
            tabla = tabla + "<td>" + tmpUsr['nombreUsr'] + "</td>";
            tabla = tabla + "<td>" + tmpUsr['apellido'] + "</td>";
            tabla = tabla + "<td>" + tmpUsr['email'] + "</td>";
            var admin = "No";
            if (tmpUsr["administrador"] == 1) {
                admin = "Si"
            }
            tabla = tabla + "<td>" + admin + "</td>";
            var id = tmpUsr['usuario_id'];
            tabla = tabla + "<td>";
            tabla = tabla + "<form method='GET' action='adminUsrDel.php'>" + 
                                "<input type='text' id='id' name='id' class='form-control' value='" + id + "'hidden>" +
                                "<input type='submit' name='Eliminar' class='py-1 my-1 btn indigo darken-4 btn-sm m-0' value='Eliminar'>" +
                                "</form>" + 
                            "<form method='GET' action='adminUsrMod.php'>" + 
                                "<input type='text' id='id' name='id' class='form-control' value='" + id + "' hidden>" + 
                                "<input type='submit' name='Modificar' class='py-1 my-1 btn indigo darken-4 btn-sm m-0' value='Modificar'>" +
                            "</form>";
            tabla = tabla + "</td>";
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