<?php
class Task {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllTasks() {
        $stmt = $this->pdo->query('SELECT * FROM tasks ORDER BY created_at DESC');
        return $stmt->fetchAll();
    }

    public function addTask($title) {
        $sql = "INSERT INTO tasks (title) VALUES (:title)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['title' => $title]);
    }

    public function deleteTask($id) {
        $sql = "DELETE FROM tasks WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
    }
}