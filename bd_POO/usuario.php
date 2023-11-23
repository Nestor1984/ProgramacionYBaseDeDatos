<?php
class Usuario {
    private $conn;
    private $table_name = "usuarios";

    public $id;
    public $nombre;
    public $email;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        // Construir la consulta SELECT
        $query = "SELECT * FROM " . $this->table_name;

        // Preparar la consulta
        $stmt = $this->conn->prepare($query);

        // Ejecutar la consulta
        $stmt->execute();

        // Retornamos el stmt
        return $stmt;
    }

    public function create() {
        /*$query = "INSERT INTO " . $this->table_name . " (nombre, email) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$this->nombre, $this->email]);*/
        // Construir la consulta INSERT INTO
        $query = "INSERT INTO " . $this->table_name . " (nombre, email) VALUES (:nombre, :email)";

        // Preparar la consulta
        $stmt = $this->conn->prepare($query);

        // Vincular los valores de las propiedades a los parámetros en la consulta
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':email', $this->email);

        // Ejecutar la consulta
        $stmt->execute();
    }

    public function update() {
        // Construir la consulta UPDATE
        $query = "UPDATE " . $this->table_name . " SET nombre = :nombre, email = :email WHERE id = :id";

        // Preparar la consulta
        $stmt = $this->conn->prepare($query);

        // Vincular los valores de las propiedades a los parámetros en la consulta
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':email', $this->email);

        // Ejecutar la consulta
        $stmt->execute();
    }

    public function delete() {
      /*$query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$this->id]);*/
        // Construir la consulta DELETE
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";

        // Preparar la consulta
        $stmt = $this->conn->prepare($query);

        // Vincular el valor de la propiedad id al parámetro :id en la consulta
        $stmt->bindParam(':id', $this->id); 

        // Ejecutar la consulta
        $stmt->execute();
    }
}
?>