<?php
include_once 'database.php';
$data = $_POST;

$sql = "INSERT INTO survey_data (name, email, phone, message) VALUES ('".$data['name']."', '".$data['email']."', '".$data['phone']."', '".$data['message']."')";

if ($conn->query($sql) === TRUE) {
  	header('Location: success.php');
} else {
  	header('Location: fail.php');
}
//echo "<pre>";print_r($data);print_r($conn);exit;