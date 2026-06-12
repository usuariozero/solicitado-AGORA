<?php
// Variables para la notificación
$mensaje = "";
$tipo_alerta = ""; // ejecuta la alerta 'success' o 'danger'

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // verifica si los campos del formulario estan vacios
    if (!empty($_POST['mes']) && !empty($_POST['anio']) && !empty($_POST['condominio']) && !empty($_POST['monto_base'])) {
       
        // envía un mensaje de exito si logra conectar
        $mensaje = "¡Facturación generada con exito!" . htmlspecialchars($_POST['condominio']) . "!";
        $tipo_alerta = "success";
    } else {
        // envía un mensaje de error si no conecta con una base de datos
        $mensaje = "Hubo un error, contacte al administrador.";
        $tipo_alerta = "danger";
    }
}
?>