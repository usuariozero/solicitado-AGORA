function actualizarEstado(id, accion) {
    // utiliza el ID de la fila para señalar la etiqueta
    const etiqueta = document.getElementById('badge-' + id);
    
    if (accion === 'aprobado') {
        etiqueta.textContent = 'validado';
        // Remueve el color existente y aplica el verde ofrecido por bootstrap
        etiqueta.className = 'badge bg-success text-white mt-1';
    } else if (accion === 'rechazado') {
        etiqueta.textContent = 'rechazado';
        // lo mismo que el de arriba pero con rojo peligroso
        etiqueta.className = 'badge bg-danger text-white mt-1';
    }
}