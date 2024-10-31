<?php
include 'config.php';
include 'Database.php';

class llamada{

    public $conexion;
    

    function __construct(){
        $db = new Database();
        $this->conexion = $db->conectToDatabase();
    }
    function save($params){
        $nombre = $params['nombre'];
        $numero = $params['numero'];

        $insert = "INSERT INTO llamar (nombre, numero) VALUES ('$nombre', '$numero')";
        return mysqli_query($this->conexion, $insert);
    }
    function getAll() {
        $query = "SELECT * FROM llamar";
        $result = mysqli_query($this->conexion, $query);

        $data = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    function delete($id_llamada) {
        $delete = "DELETE FROM llamar WHERE Id_llamada = '$id_llamada'";
        return mysqli_query($this->conexion, $delete);
    }
}
?>