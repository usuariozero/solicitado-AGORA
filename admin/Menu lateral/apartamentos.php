<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Menù Lateral</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css" />
  </head>
  <body>
    <!--botón para abrir el menú lateral-->
 <header class="header">
      <div class="container">
        <div class="btn-menu">
          <label for="btn-menu">☰</label>
      </div>
    </header>
    <!--fondo gris-->
    <div class="capa"></div>
    <input type="checkbox" id="btn-menu" />
    <div class="container-menu">
      <div class="cont-menu">
        <!--botones-->
        <nav>
         <button style="color:#343A40" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Mcondominiotorre" data-bs-whatever="@mdo">Registrar un Condominio o Torre
    </button>
         <button style="color:#343A40" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#Mbloqueapartamento" data-bs-whatever="@mdo">Registrar un Bloque de Apartamentos
    </button>
        </nav>
        <label for="btn-menu">✖️</label>
      </div>
      <!--Modal del para el registro de condominio-->
      <div class="modal fade" id="Mcondominiotorre" tabindex="-1" aria-labelledby="McondominiotorreLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="McondominiotorreLabel">Nuevo registro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="recipient-name">
          
          <label for="message-text" class="col-form-label">Dirección:</label>
              <textarea class="form-control" id="message-text"></textarea>

            <label for="message-text" class="col-form-label">Nombre de Propietario:</label>
             <input type="text" class="form-control" id="message-text"></input>
             <br>
          <label for="message-text" class="col-form-label">Alícuota:</label>
             <input type="number" id="alicuota" step="any" min="0">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="botonenviarMCT">Enviar</button>
      </div>
    </div>
  </div>
</div>
<!--Modal del registro de apartamento-->
     <div class="modal fade" id="Mbloqueapartamento" tabindex="-1" aria-labelledby="MbloqueapartamentoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="MbloqueapartamentoLabel">Nuevo Registro de Apartamento</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Apartamento:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <label for="message-text" class="col-form-label">Dirección</label>
              <textarea class="form-control" id="message-text"></textarea>
    
              <label for="message-text" class="col-form-label">Nombre del Propietario:</label>
            <input type="text" class="form-control" id="message-text"></input>
              <br>
             <label for="message-text" class="col-form-label">Alícuota:</label>
                          <input type="number" id="alicuotaapartamento" step="any" min="0">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="botonenviarMBA">Enviar</button>
      </div>
    </div>
  </div>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>