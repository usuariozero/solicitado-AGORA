<?php include 'comandos.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototipo de Tablón de Anuncios</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
         <link rel="stylesheet" href="estilos.css" />
</head>
<body>

<div class="container my-5">

    <header class="d-flex justify-content-between align-items-center mb-5 pb-3 border-bottom">
        <button type="button" class="btn btn-success px-4" data-bs-toggle="modal" data-bs-target="#modalNuevoAnuncio">
            Añadir Anuncio
        </button>
        
        <h1 class="h3 m-0 text-secondary text-uppercase tracking-wider">Tablón de Anuncios</h1>
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalHistorial">
            Ver Historial
        </button>
    </header>
<!--muestras los anuncios existentes-->
    <main class="row g-4">
        <?php 
        $hay_activos = false;
        foreach ($_SESSION['anuncios'] as $anuncio): 
            if ($anuncio['estado'] === 'publicado'): 
                $hay_activos = true;
        ?>
        <!--crea el cuerpo de los anuncios y la parte de php se encarga del funcionamiento del botón de borrar.-->
            <div class="col-md-4">
                <div class="card h-100 anuncio-card border-start border-primary border-3">
                    <a href="?eliminar_id=<?= $anuncio['id'] ?>" class="btn-eliminar" title="Eliminar anuncio">&times;</a>
                    
                    <div class="card-body pt-4">
                        <h5 class="card-title text-dark pe-3"><?= htmlspecialchars($anuncio['titulo']) ?></h5>
                        <p class="card-text text-muted"><?= nl2br(htmlspecialchars($anuncio['descripcion'])) ?></p>
                    </div>
                </div>
            </div>
        <?php 
            endif; 
        endforeach; 

        if (!$hay_activos): 
        ?>
            <div class="col-12 text-center py-5">
                <p class="text-muted fs-5">No hay anuncios publicados.</p>
            </div>
        <?php endif; ?>
    </main>
</div>

<div class="modal fade" id="modalNuevoAnuncio" tabindex="-1" aria-labelledby="modalNuevoAnuncioLabel" aria-hidden="true">
<!--textos y demas cosas de las ventanas emergentes-->    
<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalNuevoAnuncioLabel">Publicar Nuevo Anuncio</h5>
                <button type="button" class="btn-close" data-bs-shadow="none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required placeholder="Ingrese un Título">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required placeholder="Ingrese una Descripción..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="crear_anuncio" class="btn btn-primary">Publicar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalHistorial" tabindex="-1" aria-labelledby="modalHistorialLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
        <!--es la parte del historial, tanto los anuncios como el historial se almacenan en las cookies del sitio, 
        para simular una base de datos.-->
                <h5 class="modal-title" id="modalHistorialLabel">Historial de Anuncios</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php if (empty($_SESSION['anuncios'])): ?>
                    <p class="text-muted text-center">No hay registros.</p>
                <?php else: ?>
                    <ul class="list-group">
                        <?php foreach ($_SESSION['anuncios'] as $anuncio): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="text-truncate me-2" style="max-width: 75%;">
                                    <?= htmlspecialchars($anuncio['titulo']) ?>
                                </span>
                                <?php if ($anuncio['estado'] === 'publicado'): ?>
                                    <span class="badge bg-success rounded-pill">Publicado</span>
                                <?php else: ?>
                                    <span class="badge bg-danger rounded-pill">Borrado</span>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            </div>
        </div>
    </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>