<?php
class Database {
    private $host = "localhost";
    private $puerto = 3307;
    private $db_name = "redsocial";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";port=$this->puerto;dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>