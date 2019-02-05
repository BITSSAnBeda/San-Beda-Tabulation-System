<?php
include('../config.php');
$score = $_POST['one_prodfmalescore'];
$id = $_POST['one_prodfmaleid'];
$last = $_POST['one_prodfmalelast'];

$sql = "UPDATE `seven_judge_female` SET `Production` = $score WHERE Last_Name = '$last' AND Contestant_ID = $id";
$result = $con->query($sql);


header("Location: Production.php");
?>