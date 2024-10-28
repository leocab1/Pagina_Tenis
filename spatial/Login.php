<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.18/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../spatial/css/Formulario.css">
    <link rel="icon" href="../spatial/images/uwuu.ico"> <!-- Aquí se agregó el '>' -->
    <title>Inicio de Sesión - SneakerHub</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="./Conexion/Procesar_registro.php" method="POST">
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
            <form action="./Conexion/Procesar_registro.php" method="POST">
                <img src="../spatial/images/uwuu.ico" alt="Login Image" width="450" class="login-image">
                <h1>Iniciar Sesión</h1>
                <input type="text" name="Usuarios" placeholder="Usuarios" required>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
                <label for="rol">Selecciona tu rol:</label>
                <select name="rol" id="rol" required>
                    <option value="usuario">Usuario</option>
                    <option value="admin">Administrador</option>
                </select>
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

    <script src="../spatial/js/fomulario.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.18/dist/sweetalert2.all.min.js"></script>
</body>

</html>
