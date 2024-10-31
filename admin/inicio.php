<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

include '../llamar/llamada.php';

// Verificar si el usuario está autenticado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.html");
    exit;
}

$llamada = new llamada();
$registros = $llamada->getAll();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        h2 {
            margin-bottom: 20px;
        }
        .table-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .button {
            margin-right: 5px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="text-center">Lista de Llamadas Pendientes</h2>
        <div class="table-container">
            <table class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Número</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($registros as $registro): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($registro['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($registro['numero']); ?></td>
                            <td>
                                <form action="delete.php" method="POST" style="display:inline;">
                                    <input type="hidden" name="id_llamada"
                                        value="<?php echo htmlspecialchars($registro['Id_llamada']); ?>">
                                    <button class="btn btn-danger"
                                        onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?');">Eliminar</button>
                                </form>
                                <button class="btn btn-success"
                                    onclick="enviarWhatsApp('<?php echo htmlspecialchars($registro['numero']); ?>')">WhatsApp</button>
                                <button class="btn btn-info"
                                    onclick="llamar('<?php echo htmlspecialchars($registro['numero']); ?>')">Llamar</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-3">
            <a href="logout.php" class="btn btn-secondary">Cerrar sesión</a>
        </div>
    </div>

    <script>
        function enviarWhatsApp(numero) {
            var fullNumber = "+57" + numero; // Asegúrate de que 'numero' no incluya el indicativo
            var message = "Hola, este es un mensaje desde mi MEDCARE."; // Mensaje predeterminado
            var whatsappUrl = "https://api.whatsapp.com/send?phone=" + encodeURIComponent(fullNumber) + "&text=" + encodeURIComponent(message);
            window.open(whatsappUrl, '_blank'); // Abrir WhatsApp en una nueva pestaña
        }

        function llamar(numero) {
            var fullNumber = "+57" + numero; // Asegúrate de que 'numero' no incluya el indicativo
            window.location.href = "tel:" + fullNumber; // Iniciar una llamada telefónica
        }
    </script>
</body>

</html>
