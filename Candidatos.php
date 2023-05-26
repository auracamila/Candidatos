<?php
include('../config/config.php');
include('../config/database.php');

class Candidato
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connectToDatabase();
    }

    public function save($params)
    {
        $nombreapellido = $params['nombreapellido'];
        $numero = $params['numero'];
        $correo = $params['correo'];
        $ciudad = $params['ciudad'];
        $fecha = $params['fecha'];
        $linkedin = $params['linkedin'];
        $hojadevida = $params['hojadevida'];
        $ingles = $params['ingles'];
        $comentarios = $params['comentarios'];

        $insert = "INSERT INTO candidatos (nombreapellido, numero, correo, ciudad, fecha, linkedin, hojadevida, ingles, comentarios) VALUES ('$nombreapellido', '$numero', '$correo', '$ciudad', '$fecha', '$linkedin', '$hojadevida', '$ingles', '$comentarios')";
        return mysqli_query($this->conn, $insert);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM candidatos ORDER BY fecha ASC";
        return mysqli_query($this->conn, $sql);
    }

    public function getOne($id)
    {
        $sql = "SELECT * FROM candidatos WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }

    public function update($params)
    {
        $id = $params['id'];
        $nombreapellido = $params['nombreapellido'];
        $numero = $params['numero'];
        $correo = $params['correo'];
        $ciudad = $params['ciudad'];
        $fecha = $params['fecha'];
        $linkedin = $params['linkedin'];
        $hojadevida = $params['hojadevida'];
        $ingles = $params['ingles'];
        $comentarios = $params['comentarios'];

        $update = "UPDATE candidatos SET nombreapellido='$nombreapellido', numero='$numero', correo='$correo', ciudad='$ciudad', fecha='$fecha', linkedin='$linkedin', hojadevida='$hojadevida', ingles='$ingles', comentarios='$comentarios' WHERE id = $id";
        return mysqli_query($this->conn, $update);
    }

    public function remove($id)
    {
        $remove = "DELETE FROM candidatos WHERE id = $id";
        return mysqli_query($this->conn, $remove);
    }
}
?>
