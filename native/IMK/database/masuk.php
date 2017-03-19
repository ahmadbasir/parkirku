<?php
require 'connect.php';

if (isset($_POST['submit'])) {
  $noplat = strtoupper($_POST['noPlat']);
  $tipe   = $_POST['tipe'];

  $sql = "INSERT INTO parkir (noplat,tipe,kondisi) VALUES ('$noplat','$tipe','0')";
  $db->exec($sql);
}

header("location: /IMK");
?>
