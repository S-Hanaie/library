<?php 
// گرفتن متغیرهای محیطی از Railway
$server = getenv('MYSQLHOST'); // Automatically set by Railway
$user = getenv('MYSQLUSER'); // Automatically set by Railway
$pass = getenv('MYSQL_ROOT_PASSWORD'); // Automatically set by Railway
$dbname = getenv('MYSQLDATABASE'); // Automatically set by Railway

// Establish database connection.
try {
    // استفاده از متغیرهای محیطی در رشته اتصال
    $dbh = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
