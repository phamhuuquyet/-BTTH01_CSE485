<?php
function connect(){
$host = '127.0.0.1';
$dbname = 'btth01_cse485';
$username = 'root';
$password = '';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo 'Connected to database';
return $pdo;
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}
}
