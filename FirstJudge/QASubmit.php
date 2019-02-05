<?php
include('../config.php');
$score = $_POST['one_qamalescore'];
$id = $_POST['one_qamaleid'];
$last = $_POST['one_qamalelast'];

$sql = "UPDATE `first_judge_male` SET `QA`= $score WHERE Last_Name = '$last' AND Contestant_ID = $id";
$result = $con->query($sql);

header("Location: Third-QandA.php");
?>