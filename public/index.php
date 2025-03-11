<?php
// public/index.php
// Include the database connection file.
require_once '../app/database.php';

// Query the database to retrieve all tasks.
$stmt = $pdo->query("SELECT * FROM tasks");
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TaskManager</title>
    <!-- Link to the CSS file for styling -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Task List</h1>
    <ul id="task-list">
        <!-- Loop through each task and display its title -->
        <?php foreach ($tasks as $task): ?>
            <li><?php echo htmlspecialchars($task['title']); ?></li>
        <?php endforeach; ?>
    </ul>
    <!-- Include the JavaScript file for interactivity -->
    <script src="js/app.js"></script>
</body>
</html>
