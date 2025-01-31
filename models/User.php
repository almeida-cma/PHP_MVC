<?php
class User {
    private $conn;
    private $table = 'users';

    public $id;
    public $name;
    public $email;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table;
        $result = mysqli_query($this->conn, $query);
        return $result;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (name, email) VALUES (?, ?)";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'ss', $this->name, $this->email);
        if (mysqli_stmt_execute($stmt)) {
            return true;
        }
        return false;
    }
}
?>