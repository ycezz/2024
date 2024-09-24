<?php 

require_once 'models/Task.php';

class TaskController {
    private $taskModel;

    public function __construct($pdo)
    {
        $this->taskModel = new Task($pdo);
    }

    public function index()
    {
        $tasks = $this->taskModel->getAllTasks();
        require 'views/tasks/index.php';
    }

    public function create() 
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            if (empty($title)) {
                $error = "Task title cannot be empty.";
                require 'views/tasks/create.php';
                return;
            }
            
            try {
                $this->taskModel->addTask($title);
                header('Location: index.php');
                exit;
            } catch (PDOException $e) {
                $error = "An error occurred while adding the task: " . $e->getMessage();
                require 'views/tasks/create.php';
                return;
            }
        }
        require 'views/tasks/create.php';
    }

    public function delete($id) {
        try {
            $this->taskModel->deleteTask($id);
            header('Location: index.php');
            exit;
        } catch (PDOException $e) {
            $error = "An error occurred while deleting the task: " . $e->getMessage();
            $tasks = $this->taskModel->getAllTasks();
            require 'views/tasks/index.php';
        }
    }
}