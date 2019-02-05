<?php
include('config.php');

$male= "SELECT *,(firstjudge + secondjudge + thirdjudge + fourthjudge + fifthjudge + sixthjudge + sevenjudge)as Sum FROM Masterlist_male ORDER BY `Sum` DESC LIMIT 6";
$result = $con->query($male);
while($res = $result->fetch_assoc()){
    $a = $res['Contestant_ID'];
    $b = $res['Last_Name'];
        
$query = "INSERT INTO `topsixmale`(`Contestant_ID`, `Last_Name`) VALUES ($a,'$b')";
$import = $con->query($query);
}

$female = "SELECT *,(firstjudge + secondjudge + thirdjudge + fourthjudge + fifthjudge + sixthjudge + sevenjudge)as Sum FROM Masterlist_female ORDER BY `Sum` DESC LIMIT 6";
$result = $con->query($female);
while($res = $result->fetch_assoc()){
    $a = $res['Contestant_ID'];
    $b = $res['Last_Name'];
        
$query1 = "INSERT INTO `topsixfemale`(`Contestant_ID`, `Last_Name`) VALUES ($a,'$b')";
$import1 = $con->query($query1);
}
?>