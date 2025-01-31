<?php
require_once '../controllers/UserController.php';  

$controller = new UserController();

if (isset($_GET['action']) && $_GET['action'] == 'create') {
    $controller->create();
} else {
    $controller->index();
}
?>
