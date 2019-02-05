<?php
include('../config.php');
$score = $_POST['one_formalfmalescore'];
$id = $_POST['one_formalfmaleid'];
$last = $_POST['one_formalfmalelast'];

$sql = "UPDATE `seven_judge_female` SET `FormalWear`= $score WHERE Last_Name = '$last' AND Contestant_ID = $id";
$result = $con->query($sql);


header("Location: Second-FormalWear.php");
?>