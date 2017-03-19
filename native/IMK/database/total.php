<?php
  require 'connect.php';

  $belumkeluar=0;
  $sudahkeluar=0;

  $sql = "SELECT * FROM parkir WHERE kondisi=0";
  $data = $db->query($sql);
  foreach($data as $key){
    $belumkeluar++;
  }

  $sql = "SELECT * FROM parkir WHERE kondisi=1";
  $data = $db->query($sql);
  foreach($data as $key){
    $sudahkeluar++;
  }

 ?>
