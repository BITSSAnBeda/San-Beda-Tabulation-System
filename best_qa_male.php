<?php 
require('config.php');


$judges = array (
  'first_judge_male',
  'second_judge_male',
  'third_judge_male',
  'fourth_judge_male',
  'fifth_judge_male',
  'sixth_judge_male'
);

$contestant_id = array(
  '7',
  '1',
  '2',
  '3',
  '4',
  '5',
  '6',
);

$sum_qa = array(
  0,
  0,
  0,
  0,
  0,
  0,
  0,
);

$judges = array (
  'first_judge_male',
  'second_judge_male',
  'third_judge_male',
  'fourth_judge_male',
  'fifth_judge_male',
  'sixth_judge_male'
);

$counter_judge = 0;
$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, qa FROM first_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_qa[$counter_contestant] += $row['qa'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, qa FROM second_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_qa[$counter_contestant] += $row['qa'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, qa FROM third_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_qa[$counter_contestant] += $row['qa'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, qa FROM fourth_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_qa[$counter_contestant] += $row['qa'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, qa FROM fifth_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_qa[$counter_contestant] += $row['qa'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, qa FROM sixth_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_qa[$counter_contestant] += $row['qa'];
  
$counter_contestant++;

}

$hqm = 0;

for($counter = 0; $counter < 7; $counter++) {
  echo $sum_qa[$counter] . "<br>";

  if ($sum_qa[$counter] > $hqm) {
    $hfm = $sum_qa[$counter];
    $contestant_id = $counter;
  }
}

$query = "SELECT Last_Name FROM Contestant WHERE Contestant_ID = $contestant_id AND Gender = 'M'";
$result = mysqli_query($con, $query);

if (!$result) {
  $rqm = "";
} else {
  $row = mysqli_fetch_assoc($result);
  $rqm = $row['Last_Name'];

}



?>