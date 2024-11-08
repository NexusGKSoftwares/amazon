<?php
// database.php - Database connection setup
class Database {
    private $host = 'localhost';
    private $db = 'user_panel_db';
    private $user = 'root';
    private $pass = '';
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function prepare($sql) {
        return $this->pdo->prepare($sql);
    }
}
?>
