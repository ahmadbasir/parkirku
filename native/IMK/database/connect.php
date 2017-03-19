<?php
$dsn  = "mysql:host=localhost;dbname=IMK";
$user = "root";
$pass = "cipo";

try {
  $db = new PDO($dsn, $user, $pass);
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Koneksi Error: ".$e->getMessage();
}

 ?>
