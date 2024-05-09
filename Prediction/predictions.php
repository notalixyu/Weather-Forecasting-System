<?php

include '../Register/init.php';
session_start();
if(!isset($_SESSION['user'])){

header('Location: login.php');
exit();
}
include "calcPred.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sow the Wind, Reap the Storm</title>
    <link href="../Main.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header>
    <h1>Sow the Wind, Reap the Storm</h1>
</header>
<nav class="nav">
    <ul class="nav-links">
        <li class="home"><a href="../Index.php" class="nav-link">Home</a></li>
        <li class="predictions"><a href="predictions.php" class="nav-link">Predictions</a></li>
        <li class="data"><a href="../Data/data.php" class="nav-link">Data</a></li>
        <li class="register"><a href="../register.html" class="nav-link">Register</a></li>
        <li class="login"><a href="../login.html" class="nav-link">Login</a></li>
        <li class="logout"><a href="../Login/logout.php" class="nav-link">Logout</a></li>
    </ul>
</nav>


<!-- Empty middle section -->
<main id="middle-section">
    <table>
        <tr>
        <th>Prediction Type</th>
        <th>Min Temp</th>
        <th>Max Temp</th>
        <th>Humidity</th>
        </tr>
        <?php
        echo "<tr><td>7-Day Average</td>".
        "<td>".round($minTotal/7)."</td>".
        "<td>".round($maxTotal/7)."</td>".
        "<td>".round($humidTotal/7)."</td></tr>".
        "<tr><td>2-Day Difference</td>".
        "<td>".$diffMin."</td>".
        "<td>".$diffMax."</td>".
        "<td>".$diffHumid."</td></tr>"        
        ?>
    </table>
</main>

<footer>
    <p>BY WEATHERING HEIGHTS</p>
</footer>
</body>
</html>
