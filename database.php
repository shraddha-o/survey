<?php

include_once 'config.php';

$conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}