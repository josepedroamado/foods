
$(document).ready(function () {
    $(document).on("click", "#btnBuscarPublicacion", busquedaFiltrada());
    $(document).on("click", "#btnVaciarFiltroPublicacion", ReinicarFiltro());
});

function busquedaFiltrada() {
    var category = $("#cat").val();
    var type = $("#type").val();
    if (category != null) {
        alert(category);
    }
    alert(type);
}

function ReinicarFiltro() {
    var category = $("#cat").val();
    var type = $("#type").val();
    var categoria = $("#cat").val(null);
    alert(categoria);
    
    
    /*$(".btnBorrar").click(borrarAutor);
    $(".btnModificar").click(modifAutor);*/
}