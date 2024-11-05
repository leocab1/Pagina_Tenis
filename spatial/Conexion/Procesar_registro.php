<?php
include_once '../Conexion/conexion.php';

echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';

if (isset($_POST['submit'])) {
    $Usuarios = $_POST['Usuarios'];
    $contrasena = $_POST['contrasena'];
    $rolSeleccionado = $_POST['rol']; 

    if (isset($conexion)) {
        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuarios = ? AND contrasena = ?");
        $stmt->bind_param("ss", $Usuarios, $contrasena);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            session_start();
            $_SESSION['usuario'] = $Usuarios;
            $_SESSION['rol'] = $row['rol'];

            // Verificar que el rol seleccionado coincide con el rol en la base de datos
            if ($row['rol'] == $rolSeleccionado) {
                if ($row['rol'] == 1) {
                    echo "<script>
                            document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                    title: '¡Bienvenido, $Usuarios!',
                                    text: 'Eres un administrador.',
                                    icon: 'success'
                                }).then(() => {
                                    window.location.href = '../index.php';
                                });
                            });
                          </script>";
                } elseif ($row['rol'] == 2) {
                    echo "<script>
                            document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                    title: '¡Bienvenido, $Usuarios!',
                                    text: 'Eres un comprador.',
                                    icon: 'success'
                                }).then(() => {
                                    window.location.href = '../CompradorDash.php';
                                });
                            });
                          </script>";
                }
            } else {
                // Mensaje de error si el rol seleccionado no coincide con el rol en la base de datos
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                title: 'Error',
                                text: 'Rol seleccionado no coincide con el rol del usuario.',
                                icon: 'error'
                            }).then(() => {
                                window.location.href = '../Login.php';
                            });
                        });
                      </script>";
            }
            exit();
        } else {
            echo "<script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            title: 'Error',
                            text: 'Usuario o contraseña incorrectos.',
                            icon: 'error'
                        }).then(() => {
                            window.location.href = '../Login.php';
                        });
                    });
                  </script>";
        }

        $stmt->close();
    } else {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Error',
                        text: 'No se pudo establecer la conexión a la base de datos.',
                        icon: 'error'
                    }).then(() => {
                        window.location.href = '../Login.php';
                    });
                });
              </script>";
    }

    $conexion->close();
} else {
    echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Error',
                    text: 'El formulario no se ha enviado correctamente.',
                    icon: 'error'
                });
            });
          </script>";
}
?>
