<?php

include 'init.php';

if(!isset($_SESSION['user'])){

header ('location:login.php');

}

?> 
<p>This is the protected page</p>

<a href="logout.php">Logout Page</a>