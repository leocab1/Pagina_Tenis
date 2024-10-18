<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../spatial/css/Formulario.css">
    <link rel="icon" href="../spatial/images/uwuu.ico">
    <title>Inicion de Session - SneakerHub</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="../spatial/Conexion/Procesar_registro.php" method="POST">
                <img src="../spatial/images/uwuu.ico" alt="Login Image" width="450" class="login-image">
                <h1>Crear Usuario</h1>
                <input type="text" name="usuarios" placeholder="Usuarios">
                <input type="password" name="contrasena" placeholder="Contraseña">
                <label class="checkbox-container">
                    <input type="checkbox" id="termsCheckbox" name="termsCheckbox">
                    <div class="checkmark"></div>
                    <span id="terms-conditions-link">Acepto los términos y condiciones</span>
                </label>
                <button type="submit" name="submit" disabled>Crear Cuenta</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="../spatial/Conexion/Procesar_registro.php" method="POST">
                <img src="../spatial/images/uwuu.ico" alt="Login Image" width="450" class="login-image">
                <h1>Iniciar Sesión</h1>
                <input type="text" name="Usuarios" placeholder="Usuarios">
                <input type="password" name="contrasena" placeholder="Contraseña">
                <a href="restcont.html">¿Olvidaste tu contraseña?</a>
                <button type="submit" name="submit">Iniciar Sesión</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>¡Hola, SneakerHub!</h1>
                    <p>Regístrese con sus datos personales para utilizar todas las funciones del sitio.</p>
                    <button class="hidden" id="login">Iniciar Sesión</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>¡Hola, SneakerHub!</h1>
                    <p>Inicia sesión con tus datos personales para acceder a todas las funciones del sitio.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="termsModal">
        <div class="modal-container">
            <div class="modal-container-header">
                <div class="modal-container-title">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2.9 14.6l-1.4 1.4-3.7-3.8-3.7 3.8-1.4-1.4 3.8-3.8-3.8-3.7 1.4-1.4 3.7 3.8 3.7-3.8 1.4 1.4-3.8 3.7 3.8 3.8z"/>
                    </svg>
                    <h2>Términos y Condiciones</h2>
                </div>
            </div>
            <div class="modal-container-body">
                <p>Al utilizar el servicio de estacionamiento universitario proporcionado por la Universidad Tecnológica de Puebla (UTP), aceptas los siguientes términos y condiciones:</p>
                <ol>
                    <li><span>Uso del Servicio:</span> Los usuarios tienen acceso al estacionamiento con el fin exclusivo de estacionar vehículos autorizados.</li>
                    <li><span>Reglas de Estacionamiento:</span> Los usuarios deben respetar las áreas designadas, límites de velocidad y cualquier otra regulación establecida por la UTP.</li>
                    <li><span>Responsabilidades del Usuario:</span> Es responsabilidad del usuario pagar las tarifas aplicables, asegurar adecuadamente sus vehículos y cumplir con todas las normativas de seguridad.</li>
                    <li><span>Privacidad:</span> La información personal recopilada se utiliza conforme a nuestra política de privacidad, protegiendo los datos según las leyes aplicables.</li>
                    <li><span>Limitaciones de Responsabilidad:</span> La UTP no se hace responsable por daños, pérdidas o robos de vehículos estacionados dentro de sus instalaciones.</li>
                </ol>
            </div>
            <div class="modal-container-footer">
                <button class="is-ghost" id="closeModal">Cerrar</button>
                <button class="is-ghost" id="acceptTerms">Aceptar</button>
            </div>
        </div>
    </div>

    <script src="../spatial/js/fomulario.js"></script>
</body>

</html>
