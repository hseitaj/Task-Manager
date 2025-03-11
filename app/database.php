<?php
// app/database.php
// Include the configuration file to use the database constants.
require_once 'config.php';

try {
    // Build the Data Source Name (DSN) using the defined constants.
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
    // Create a new PDO instance.
    $pdo = new PDO($dsn, DB_USER, DB_PASS);
    // Set error mode to Exception to allow error handling via try/catch.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // In case of a connection error, display a message and stop execution.
    die("Database Connection Failed: " . $e->getMessage());
}
