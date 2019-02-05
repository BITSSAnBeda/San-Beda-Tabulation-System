<?php 
require('config.php');


$judges = array (
  'first_judge_female',
  'second_judge_female',
  'third_judge_female',
  'fourth_judge_female',
  'fifth_judge_female',
  'sixth_judge_female'
);

$contestant_id = array(
  '1',
  '2',
  '3',
  '4',
  '5',
  '6',
  '7',
  '8',
  '9',
);

$sum_casualwear = array(
  0,
  0,
  0,
  0,
  0,
  0,
  0,
  0,
  0,
);

$judges = array (
  'first_judge_female',
  'second_judge_female',
  'third_judge_female',
  'fourth_judge_female',
  'fifth_judge_female',
  'sixth_judge_female'
);

$counter_judge = 0;
$counter_contestant = 0;

while ($counter_contestant < 9) {

  $query = "SELECT Contestant_ID, casualwear FROM first_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_casualwear[$counter_contestant] += $row['casualwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 9) {

  $query = "SELECT Contestant_ID, casualwear FROM second_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_casualwear[$counter_contestant] += $row['casualwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 9) {

  $query = "SELECT Contestant_ID, casualwear FROM third_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_casualwear[$counter_contestant] += $row['casualwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 9) {

  $query = "SELECT Contestant_ID, casualwear FROM fourth_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_casualwear[$counter_contestant] += $row['casualwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 9) {

  $query = "SELECT Contestant_ID, casualwear FROM fifth_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_casualwear[$counter_contestant] += $row['casualwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 9) {

  $query = "SELECT Contestant_ID, casualwear FROM sixth_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_casualwear[$counter_contestant] += $row['casualwear'];
  
$counter_contestant++;

}

$hcm = 0;

for($counter = 0; $counter < 9; $counter++) {
  echo $sum_casualwear[$counter] . "<br>";

  if ($sum_casualwear[$counter] > $hcm) {
    $hcf = $sum_casualwear[$counter];
    $contestant_id = $counter;
  }
}

$query = "SELECT Last_Name FROM Contestant WHERE Contestant_ID = $contestant_id AND Gender = 'F'";
$result = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($result);
$rcf = $row['Last_Name'];




?>