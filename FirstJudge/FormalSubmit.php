<?php
include('../config.php');
$score = $_POST['one_formalmalescore'];
$id = $_POST['one_formalmaleid'];
$last = $_POST['one_formalmalelast'];

$sql = "UPDATE `first_judge_male` SET `FormalWear`= $score WHERE Last_Name = '$last' AND Contestant_ID = $id";
$result = $con->query($sql);

header("Location: Second-FormalWear.php");
?>