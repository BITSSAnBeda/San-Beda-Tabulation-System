<?php
include('../config.php');
$score = $_POST['one_prodmalescore'];
$id = $_POST['one_prodmaleid'];
$last = $_POST['one_prodmalelast'];

$sql = "UPDATE `sixth_judge_male` SET `Production`= $score WHERE Last_Name = '$last' AND Contestant_ID = $id";
$result = $con->query($sql);

header("Location: Production.php");
?>