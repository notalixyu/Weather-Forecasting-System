<?php
include "init.php";
$username = $_POST['txtUserName'];
$email = $_POST['txtUserEmail'];
$password = $_POST['txtUserPass'];
$query = "INSERT INTO weatherUsers (userName, userEmail, userPass) VALUES ('$username', '$email', '$password')";
if(mysqli_query($connection, $query)){

    include "login.php";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);

}
?>