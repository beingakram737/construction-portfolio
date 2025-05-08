<?php
// db_config.php - Database connection setup

$host = 'localhost';      // Hosting server
$dbname = 'portfolio_db'; // Aapka database name
$user = 'root';           // Default username (XAMPP)
$pass = '';               // Default password (blank)

try {
    // PDO se secure connection banate hain
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully!";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
