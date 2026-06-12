<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Pagos - Residentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos_pago.css" />
</head>
<body class="cuerpotabla">
<!--cuerpo de la tabla-->
<div class="container">
    <div class="card shadow-sm border-0">
        <div class="card-header">
            <h5 class="mb-0">Administración de Pagos</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-primary text-uppercase small tracking-wider">
                        <tr>
                            <th class="ps-4">Propietario</th>
                            <th>Datos de Transferencia</th>
                            <th class="text-center">Comprobante</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <!--conecta con la parte de php-->
                    <tbody>
                        <?php include 'comandos_pago.php'; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--conecta el archivo con el script que cambia el color de la etiqueta con este-->
<script src="finanzas_pago.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>
</body>
</html>