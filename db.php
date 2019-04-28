<?php
$dsn = 'mysql:host=10.8.30.49;dbname=jjrober2355wi19';
$username = 'jjrober2355wi19';
$password = 'Rim.sky1844';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {
}
