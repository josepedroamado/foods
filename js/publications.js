require_once('includes/connectDB.php');

$(document).ready(function() {
$(document).on("click", "#btnBuscarPublicacion", function() {
var category = $("#cat").val();
        var type = $("#type").val();
        alert(category);
        });
        $(document).on("click", "#btnVaciarFiltroPublicacion", function() {
alert("aprete reset");
        });
});
        function ReinicarFiltro(){
        var categoria = $("#cat").val = "";
                alert(categoria);
                $(".btnBorrar").click(borrarAutor);
                $(".btnModificar").click(modifAutor);
        }

function PublicacionPorFiltro(){

if (!$_SESSION['logged']) {
$_SESSION['error'] = "Debe ingresar para acceder a las publicaciones.";
        header("Location: login.php");
}
else{
//Consulto por publicaciones de tipo receta
if ($conn) {
$sql = "SELECT publicaciones.*, categorias.nombreCat, usuarios.nombreUsr, usuarios.apellido
        FROM publicaciones, categorias, usuarios
        WHERE publicaciones.eliminado = 0 AND publicaciones.usuario_id = usuarios.usuario_id AND publicaciones.categoria_id = categorias.categoria_id
        ORDER BY fecha ASC";
        $parametros = array();
        $result = $conn - > consulta($sql, $parametros);
        if ($result) {
$recipies = $conn - > restantesRegistros();
        $smarty - > assign("recipies", $recipies);
        } else {
echo "Error de consulta";
        }
} else {
echo "Error de conexión: ".$conn - > ultimoError();
        }

//Consulto por tipos
if ($conn) {
$sql = "SELECT * FROM tipos";
        $parametros = array();
        $result = $conn - > consulta($sql, $parametros);
        if ($result) {
$types = $conn - > restantesRegistros();
        $smarty - > assign("types", $types);
        }
else{
echo "Error de consulta";
        }
}
}
}