<?php
include('../config.php');
$score = $_POST['one_prodmalescore'];
$id = $_POST['one_prodmaleid'];
$last = $_POST['one_prodmalelast'];

$sql = "UPDATE `first_judge_male` SET `Production`= $score WHERE Last_Name = '$last' AND Contestant_ID = $id";
$result = $con->query($sql);

$sql = "SELECT * FROM first_judge_male ORDER BY Contestant_ID ASC";
$result = $con->query($sql);

while($res = $result->fetch_assoc()){
  $a = $res['Contestant_ID'];
  $b = $res['Last_Name'];
  $c = $res['CasualWear'];
  $d = $res['FormalWear'];
  $e = $res['Production'];
  $f = $res['QA'];

  $total = $c + $d + $e + $f;

  echo $total." ".$a." ".$b."<br/>";    
  $query = "UPDATE `Masterlist_male` SET `firstjudge`= $total WHERE `Contestant_ID`= $a AND `Last_Name`= '$b'";
  $qwe = $con->query($query);

  if (!$qwe) {
    die("Failed to compute:" . mysqli_error($con));
  }
}

header("Location: Production.php");
?>