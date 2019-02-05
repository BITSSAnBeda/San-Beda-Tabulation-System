<?php
include('../config.php');

$sql = "SELECT * FROM fifth_judge_male ORDER BY Contestant_ID ASC";
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
  $query = "UPDATE `Masterlist_male` SET `fifthjudge`= $total WHERE `Contestant_ID`= $a AND `Last_Name`= '$b'";
  $qwe = $con->query($query);

  if (!$qwe) {
    die("Failed to compute:" . mysqli_error($con));
  }
}

$sql = "SELECT * FROM fifth_judge_female ORDER BY Contestant_ID ASC";
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
  $query = "UPDATE `Masterlist_female` SET `fifthjudge`= $total WHERE `Contestant_ID`= $a AND `Last_Name`= '$b'";
  $qwe = $con->query($query);

  if (!$qwe) {
    die("Failed to compute:" . mysqli_error($con));
  }
}

header('Location: Pre-Judge.html');
?>