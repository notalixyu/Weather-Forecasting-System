
<?php 
include "init.php";
$minTotal=0;
$maxTotal=0;
$humidTotal=0;
$count=0;
//Query
$query = "SELECT readingID, minTemp, maxTemp, humidity, date FROM rawData ORDER BY readingID DESC LIMIT 7";
$result = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($result)) {
    //Get totals for averages
    $minTotal += $row["minTemp"];
    $maxTotal += $row["maxTemp"];
    $humidTotal += $row["humidity"];
    //Save first values for difference
    if($count == 0) {
        $firstMin = $row["minTemp"];
        $firstMax = $row["maxTemp"];
        $firstHumid = $row["humidity"];
    //Save second values for difference            
    } else if($count == 1) {
        $secondMin = $row["minTemp"];
        $secondMax = $row["maxTemp"];
        $secondHumid = $row["humidity"];
    }
    $count += 1;

}
$diffMin = $firstMin + ($firstMin - $secondMin);
$diffMax = $firstMax + ($firstMax - $secondMax);
$diffHumid = $firstHumid + ($firstHumid - $secondHumid);
?>