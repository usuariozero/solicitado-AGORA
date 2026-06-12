<?php
session_start();

// crea los arreglos de anuncio de ejemplo, si es que no existen
if (!isset($_SESSION['anuncios'])) {
    $_SESSION['anuncios'] = [
        ['id' => 1, 'titulo' => 'Este es un anuncio de jemplo', 'descripcion' => 'Esta es una sorprende descripción de ejemplo', 'estado' => 'publicado'],
    ];
}

// esto de aqui crea un nuevo anuncio cuando el usuario lo solicita
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['crear_anuncio'])) {
    $titulo = trim($_POST['titulo']);
    $descripcion = trim($_POST['descripcion']);

    // basado en el momento de la creacio se crea un id para identificar el anuncio
    if (!empty($titulo) && !empty($descripcion)) {
        $nuevo_id = time();
        $_SESSION['anuncios'][] = [
            'id' => $nuevo_id,
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'estado' => 'publicado'
        ];
    }
    //IMPORTANTE, esta cosa evita que al recargar la pagina se vuelva a crear el mismo anuncio
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

//Mata los anuncios de una forma lenta y elegante.
if (isset($_GET['eliminar_id'])) {
    $id_eliminar = (int)$_GET['eliminar_id'];
    foreach ($_SESSION['anuncios'] as &$anuncio) {
        if ($anuncio['id'] === $id_eliminar) {
            $anuncio['estado'] = 'borrado';
            break;
        }
    }
    //lo mismo que el anterior header, evita que se dupliquen los anuncios al momento de eliminarse.
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>
