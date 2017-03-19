<?php
require 'connect.php';

$id = $_GET['id'];

$sql = "UPDATE parkir SET kondisi='1' WHERE id='$id'";
$db->exec($sql);

header("location: /IMK");
 ?>
