<?php 

$server = getenv('MYSQLHOST'); 
$user = getenv('MYSQLUSER'); 
$pass = getenv('MYSQL_ROOT_PASSWORD'); 
$dbname = getenv('MYSQLDATABASE'); 


try {
    
    $dbh = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
