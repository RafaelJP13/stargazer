<?php 

require_once './src/config/database.php';

// Usage example
$database = Database::getInstance();
$mysqli = $database->getConnection();

// Example query
$query = "SELECT * FROM usuario";
$result = $mysqli->query($query);
