<?php ob_start(); ?>
<a href="index.php?action=create" class="btn btn-primary mb-3">Add New Task</a>
<ul class="list-group">
    <?php foreach ($tasks as $task): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <?php echo htmlspecialchars($task['title']); ?>
            <a href="index.php?action=delete&id=<?php echo $task['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>
<?php $content = ob_get_clean(); ?>
<?php include 'views/layout.php'; ?>