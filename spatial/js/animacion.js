function animar() {
    document.getElementById('content').classList.add('hidden'); // Oculta el contenido
    document.getElementById('fullscreen-anim').classList.add('transition-wipe-right'); // Activa la animación

    setTimeout(() => {
        window.location.href = './te'; // Redirige a la nueva página
    }, 12500); // Debe coincidir con la duración de la animación
}
