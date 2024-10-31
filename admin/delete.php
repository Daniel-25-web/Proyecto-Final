<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../llamar/config.php';
include '../llamar/Database.php';

class llamada {
    public $conexion;

    function __construct() {
        $db = new Database();
        $this->conexion = $db->conectToDatabase();
    }

    function delete($id_llamada) {
        $delete = "DELETE FROM llamar WHERE Id_llamada = '$id_llamada'";
        return mysqli_query($this->conexion, $delete);
    }
}

// Manejar la solicitud de eliminación
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_llamada'])) {
    $id_llamada = $_POST['id_llamada'];
    $llamada = new llamada();
    if ($llamada->delete($id_llamada)) {
        header("Location: inicio.php"); // Cambia 'index.php' por el nombre de tu archivo principal
        exit();
    } else {
        echo "Error al eliminar el registro.";
    }
}
?>
