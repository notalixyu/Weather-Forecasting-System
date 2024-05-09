<?php
include "../Register/init.php";
include "../Login/login.php";
$username = $_POST['txtUserName'];
$email = $_POST['txtUserEmail'];
$password = $_POST['txtUserPass'];
$query = "INSERT INTO weatherUsers (userName, userEmail, userPass) VALUES ('$username', '$email', '$password')";
