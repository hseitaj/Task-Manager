<?php
// public/index.php
require_once '../app/database.php';

$stmt = $pdo->query("SELECT * FROM tasks");
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Determine the destination link based on the task title.
function getTaskLink($title) {
    $map = [
        'Enhance Resume Page' => 'resume.php',
        'Improve Index Layout' => 'improve_index.php',
        'Create UI Template for Task Card' => 'ui_template.php',
        'Explore Laravel Migration' => 'laravel_migration.php'
    ];
    return isset($map[$title]) ? $map[$title] : '#';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TaskManager - Task List</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Navigation styles */
        nav {
            background: #007BFF;
            padding: 10px;
        }
        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 0;
            padding: 0;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        /* Ensure that the anchor wrapping the card is displayed as a block */
        .task-link {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
    <nav>
      <ul>
        <li><a href="index.php">Task List</a></li>
        <li><a href="resume.php">Resume</a></li>
        <li><a href="improve_index.php">Improve Index Layout</a></li>
        <li><a href="ui_template.php">UI Template</a></li>
        <li><a href="laravel_migration.php">Laravel Migration</a></li>
      </ul>
    </nav>
    <h1>TaskManager</h1>
    <div class="task-container">
        <?php foreach ($tasks as $task): ?>
            <a class="task-link" href="<?php echo getTaskLink($task['title']); ?>">
                <div class="task-card">
                    <h3><?php echo htmlspecialchars($task['title']); ?></h3>
                    <p><?php echo nl2br(htmlspecialchars($task['description'])); ?></p>
                    <small>Created at: <?php echo htmlspecialchars($task['created_at']); ?></small>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
    <script src="js/app.js"></script>
</body>
</html>
