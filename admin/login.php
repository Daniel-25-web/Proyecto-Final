<?php
// Definir usuario y contraseña válidos
$valid_user = 'Daniel24';
$valid_password = 'psicovida90';

// Obtener los datos enviados desde el formulario
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Verificar si las credenciales son correctas
if ($username === $valid_user && $password === $valid_password) {
    // Iniciar sesión y redirigir a la página de inicio
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("Location: inicio.php");
    exit;
} else {
    // Si las credenciales no son válidas, mostrar un mensaje de error
    echo "<p>Usuario o contraseña incorrectos. <a href='login.html'>Intenta de nuevo</a>.</p>";
}
?>
