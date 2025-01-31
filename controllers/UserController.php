<?php
require_once '../config/database.php';
require_once '../models/User.php';

class UserController {
    private $db;
    private $user;

    public function __construct() {
        $this->db = $GLOBALS['conn'];
        $this->user = new User($this->db);
    }

    public function index() {
        $result = $this->user->read();
        include '../views/user/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->user->name = $_POST['name'];
            $this->user->email = $_POST['email'];
            if ($this->user->create()) {
                header('Location: ../public/index.php');
                exit;
            }
        }
        include '../views/user/create.php';
    }
}
?>
