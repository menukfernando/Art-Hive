<?php

$name = $_POST['name']
$email = $_POST['email']
$message = $_POST['message']

$mailheader = "From: ".$name."<".$email.">\r\n";


$recipient = "menukfernando7@gmail.com";
mail($recipient, $message, $mailheader)
or die("Error!");

echo 'message send';
?>