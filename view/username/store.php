<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once("c://xampp/htdocs/proyectoSL2/controller/usernameController.php");
    
    $obj = new usernameController();
    
    // Verifica si la clave 'NombreTipo' está presente en $_POST antes de enviarla al controlador
    
    $nombreTipo = isset($_POST['NombreTipo']) ? $_POST['NombreTipo'] : null;

    $obj->guardar($nombreTipo);
} else {
    // Manejo si la solicitud no es de tipo POST (opcional)
    echo "Acceso no permitido";
}
?>

 