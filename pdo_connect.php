<?php
$host = 'localhost';
$db   = 'test_db';    
$user = 'root';       
$pass = '';           
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // throw exceptions on error
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // fetch results as associative arrays
    PDO::ATTR_EMULATE_PREPARES   => false,                  // use real prepared statements
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "PDO connection successful!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
