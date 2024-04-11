<?php
include('connection.php');
if(isset($_POST['submit']))
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];
$query=INSERT INTO `info` (`id`, `mn`, `mail`, `pass`) VALUES ('$name', '$mobile', 'email', 'password');
mysqli_query($con,$query);
?>