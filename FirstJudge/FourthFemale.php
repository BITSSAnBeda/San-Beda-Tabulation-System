<?php
include('../config.php');
$score = $_POST['one_beautyfmalescore'];
$score2 = $_POST['one_beautyfmalescore'];
$id = $_POST['one_beautyfmaleid'];
$last = $_POST['one_beautyfmalelast'];

$sql = "UPDATE `onetopsixfemale` SET `Beauty`= $score,`Intelligence`= $score2 WHERE Last_Name = '$last' AND Contestant_ID = $id";
$result = $con->query($sql);

header("Location: Fourth.php");
?>