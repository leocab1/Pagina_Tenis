function animar() {
    document.getElementById('content').classList.add('hidden'); // Oculta el contenido
    document.getElementById('fullscreen-anim').classList.add('transition-wipe-right'); // Activa la animación

    setTimeout(() => {
        window.location.href = './tenisUsuario.php'; // Redirige a la nueva página
    }, 6500); // Debe coincidir con la duración de la animación
}
