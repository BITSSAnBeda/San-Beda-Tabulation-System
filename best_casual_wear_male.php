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

$sum_casualwear = array(
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

  $query = "SELECT Contestant_ID, casualwear FROM first_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_casualwear[$counter_contestant] += $row['casualwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, casualwear FROM second_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_casualwear[$counter_contestant] += $row['casualwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, casualwear FROM third_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_casualwear[$counter_contestant] += $row['casualwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, casualwear FROM fourth_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_casualwear[$counter_contestant] += $row['casualwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, casualwear FROM fifth_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_casualwear[$counter_contestant] += $row['casualwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, casualwear FROM sixth_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_casualwear[$counter_contestant] += $row['casualwear'];
  
$counter_contestant++;

}

$hcm = 0;

for($counter = 0; $counter < 7; $counter++) {
  echo $sum_casualwear[$counter] . "<br>";

  if ($sum_casualwear[$counter] > $hcm) {
    $hcm = $sum_casualwear[$counter];
    $contestant_id = $counter;
  }
}

$query = "SELECT Last_Name FROM Contestant WHERE Contestant_ID = $contestant_id AND Gender = 'M'";
$result = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($result);
$rcm = $row['Last_Name'];




?>