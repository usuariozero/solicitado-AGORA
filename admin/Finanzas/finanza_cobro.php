<?php include 'comandos_cobro.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Financiero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     <link rel="stylesheet" href="estilos_cobro.css" />
</head>
<body>
<!--cuerpo de finanzas-->
<div class="container my-5">
    <!--centra el contenido-->
    <div class="row justify-content-center">
        <!--ejecuta las alertas cuando se presio enviar-->
        <div class="col-md-6 col-lg-5">
            <?php if (!empty($mensaje)): ?>
                <div class="aert-<?php echo $tipo_alerta; ?> alert-dismissible fade show" role="alert">
                    <?php echo $mensaje; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="card card-custom p-4">
                <div class="card-body">
                    <h2 class="titulo">Generar Cobro</h2>
                    <p class="subtitulo">Rellene el formulario con los datos solicitados para empezar a Facturar.</p>
                    <!-- crea el cuerpo del formulario y simula el envio de datos a un servidor-->
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <!--cuerpo de la sección de año-->
                        <div class="mb-3">
                            <label for="mes" class="form-label">Mes *</label>
                            <select class="form-select" id="mes" name="mes" required>
                                <option value="" disabled selected>Selecciona el mes</option>
                                <option value="Enero">Enero</option>
                                <option value="Febrero">Febrero</option>
                                <option value="Marzo">Marzo</option>
                                <option value="Abril">Abril</option>
                                <option value="Mayo">Mayo</option>
                                <option value="Junio">Junio</option>
                                <option value="Julio">Julio</option>
                                <option value="Agosto">Agosto</option>
                                <option value="Septiembre">Septiembre</option>
                                <option value="Octubre">Octubre</option>
                                <option value="Noviembre">Noviembre</option>
                                <option value="Diciembre">Diciembre</option>
                            </select>
                        </div>
<!--el resto son las demas opciones del formulario y el botón de facturación-->
                        <div class="mb-3">
                            <label for="año" class="form-label">Año *</label>
                            <input type="number" class="form-control" id="año" name="año" min="2026" max="2035" placeholder="Ingrese el año aqui" required>
                        </div>

                        <div class="mb-3">
                            <label for="condominio" class="form-label"> Condominio *</label>
                            <input type="text" class="form-control" id="condominio" name="condominio" placeholder="Ingrese el nombre de la Residencia, Torre o Edificio" required>
                        </div>

                        <div class="mb-4">
                            <label for="monto_base" class="form-label">Monto Base de los Gastos Globales ($) *</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" step="0.01" class="form-control" id="monto_base" name="monto_base" placeholder="0.00" required>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">
                                <i class="bi bi-wallet2"></i> Efectuar Facturación Masiva
                            </button>
                        </div>

                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>