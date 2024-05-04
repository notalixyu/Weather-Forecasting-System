<?php
include 'init.php';
$username = $_POST['txtUserName'];
$password = $_POST['txtUserPass'];

$query = "SELECT * FROM weatherUsers WHERE userName = '$username' AND userPass = '$password'";
$result = mysqli_query($connection, $query);
if ($row = mysqli_fetch_assoc($result)) {

    $_SESSION['user'] = $username;
    header('location:protected.php');
    
    } else {
    
    $_SESSION['message'] = 'User not recognised';
    header('location:protected.php');
    
    }
?>