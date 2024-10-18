<?php
session_start();

// Destruye todas las variables de sesión
session_unset(); 

// Destruye la sesión
session_destroy(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../assets//css/Pruebaa.css">
<link rel="shortcut icon" href="../images/uwuu.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cerrando Sesión</title>
  <link rel="shortcut icon" href="../spatial/images/uwuu.ico" type="image/x-icon">
</head>
<body>
  <div class="fullscreen"></div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      setTimeout(function() {
        window.location.href = "../Login.php"; // Redirige al usuario después de la animación
      }, 2500);
    });
  </script>
</body>
</html>
