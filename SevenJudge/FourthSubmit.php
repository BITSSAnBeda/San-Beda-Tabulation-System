<?php
include('../config.php');
$score = $_POST['one_beautymalescore'];
$score2 = $_POST['one_beautymalescore'];
$id = $_POST['one_beautymaleid'];
$last = $_POST['one_beautymalelast'];

$sql = "UPDATE `seventopsixmale` SET `Beauty`= $score,`Intelligence`= $score2 WHERE Last_Name = '$last' AND Contestant_ID = $id";
$result = $con->query($sql);

header("Location: Fourth.php");
?>