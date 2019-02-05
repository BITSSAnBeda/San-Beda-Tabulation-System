<?php
include('../config.php');
$score = $_POST['one_qafmalescore'];
$id = $_POST['one_qafmaleid'];
$last = $_POST['one_qafmalelast'];

$sql = "UPDATE `fifth_judge_female` SET `QA`= $score WHERE Last_Name = '$last' AND Contestant_ID = $id";
$result = $con->query($sql);


header("Location: Third-QandA.php");
?>