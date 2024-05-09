<?php
include "init.php";
$minTotal=0;
$maxTotal=0;
$humidTotal=0;
$query = "SELECT readingID, minTemp, maxTemp, humidity, date FROM rawData ORDER BY readingID DESC LIMIT 7";
$result = mysqli_query($connection, $query);
?>2