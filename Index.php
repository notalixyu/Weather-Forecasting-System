<?php

include 'init.php';

if(!isset($_SESSION['user'])){

header ('location:login.php');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sow the Wind, Reap the Storm</title>
    <link href="Main.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header>
    <h1>Sow the Wind, Reap the Storm</h1>
</header>
<nav class="nav">
    <ul class="nav-links">
        <li class="home"><a href="index.php" class="nav-link">Home</a></li>
        <li class="predictions"><a href="predictions.php" class="nav-link">Predictions</a></li>
        <li class="data"><a href="data.php" class="nav-link">Data</a></li>
        <li class="register"><a href="register.html" class="nav-link">Register</a></li>
        <li class="login"><a href="login.html" class="nav-link">Login</a></li>
    </ul>
</nav>


<!-- Empty middle section -->
<main id="middle-section">
    <div class="news-container">
        <h2>Latest News</h2>
        <p>Get ready to embrace the warmth as sunny skies prevail across the region, bringing a delightful respite from recent chills. <br>
            Temperatures are on the rise, with clear skies and gentle breezes creating perfect conditions for outdoor activities.<br>
            Whether it's a leisurely stroll in the park or a refreshing hike in the countryside, <br>
            seize the day and soak in the beauty of nature's embrace. <br>
            Stay tuned for more updates and make the most of this glorious weather! </p>
</main>

<footer>
    <p>BY WEATHERING HEIGHTS</p>
</footer>
</body>
</html>
