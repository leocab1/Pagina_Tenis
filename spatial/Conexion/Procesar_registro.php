<?php
if (isset($_POST['submit'])) {
    $Usuarios = $_POST['Usuarios'];  
    $contrasena = $_POST['contrasena'];

    $servername = "localhost"; 
    $username = "root";  
    $password = "";
    $dbname = "inventario_tenis";    

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuarios = ? AND contrasena = ?");
    $stmt->bind_param("ss", $Usuarios, $contrasena);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['usuario'] = $Usuarios;

        echo "<script>
                switch (true) {
                    case true:
                        alert('¡Bienvenido, $Usuarios!');
                        break;
                }
                window.location.href = '../index.php';
              </script>";
        exit(); 
    } else {
        echo "<script>alert('Error: Usuario o contraseña incorrectos.');</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Error: El formulario no se ha enviado correctamente.');</script>";
}
?>
