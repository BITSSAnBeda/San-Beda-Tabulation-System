<?php
include('../config.php');
$score = $_POST['one_casualfmalescore'];
$id = $_POST['one_casualfmaleid'];
$last = $_POST['one_casualfmalelast'];

$sql = "UPDATE `third_judge_female` SET `CasualWear`= $score WHERE Last_Name = '$last' AND Contestant_ID = $id";
$result = $con->query($sql);


header("Location: First-CasualWear.php");
?>