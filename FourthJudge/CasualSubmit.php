<?php
include('../config.php');
$score = $_POST['one_casualmalescore'];
$id = $_POST['one_casualmaleid'];
$last = $_POST['one_casualmalelast'];

$sql = "UPDATE `fourth_judge_male` SET `CasualWear`= $score WHERE Last_Name = '$last' AND Contestant_ID = $id";
$result = $con->query($sql);

header("Location: First-CasualWear.php");
?>