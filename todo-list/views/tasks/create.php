<?php ob_start(); ?>
<h1>Add New Task</h1>
<?php if (isset($error)): ?>
    <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
<?php endif; ?>
<form action="index.php?action=create" method="post">
    <div class="mb-3">
        <label for="title" class="form-label">Task Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Task</button>
</form>
<a href="index.php" class="btn btn-secondary mt-3">Back to List</a>
<?php $content = ob_get_clean(); ?>
<?php include 'views/layout.php'; ?>