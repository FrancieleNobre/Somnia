<?php
class dbConnection {
    private $host;
    private $usuario;
    private $senha;
    private $dbname;
    private $connection;

    public function __construct($host, $usuario, $senha, $dbname) {
        $this->host = $host;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->dbname = $dbname;

        try {
            $conn = "mysql:host={$this->host};dbname={$this->dbname}";
            $this->connection = new PDO($conn, $this->usuario, $this->senha);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            die("Connection error" . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}

// Aqui verifica se tem um server local e se não tiver vai entrar em um servidor "online"
$serverLocal = "True";
if ($serverLocal == "True"){
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "Somnia";
} else {
    $host = "";
    $usuario = "";
    $senha = "";
    $dbname = "";
}

$dbConnection = new dbConnection($host, $usuario, $senha, $dbname);
$connection = $dbConnection->getConnection();
