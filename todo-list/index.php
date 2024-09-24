<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config/database.php';
require_once 'controllers/TaskController.php';

$controller = new TaskController($pdo);

$action = $_GET['action'] ?? 'index';

try {
    switch ($action) {
        case 'create':
            $controller->create();
            break;
        case 'delete':
            $id = $_GET['id'] ?? null;
            if ($id) {
                $controller->delete($id);
            } else {
                throw new Exception("Invalid task ID");
            }
            break;
        default:
            $controller->index();
            break;
    }
} catch (Exception $e) {
    // Log the error and show a user-friendly message
    error_log($e->getMessage());
    echo "An error occurred. Please try again later.";
}