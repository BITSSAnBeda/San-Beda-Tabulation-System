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
  '7',
  '1',
  '2',
  '3',
  '4',
  '5',
  '6',
);

$sum_production = array(
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

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, Production FROM first_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_production[$counter_contestant] += $row['Production'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, Production FROM second_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_production[$counter_contestant] += $row['Production'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, Production FROM third_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_production[$counter_contestant] += $row['Production'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, Production FROM fourth_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_production[$counter_contestant] += $row['Production'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, Production FROM fifth_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_production[$counter_contestant] += $row['Production'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, Production FROM sixth_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_production[$counter_contestant] += $row['Production'];
  
$counter_contestant++;

}

$high = 0;

for($counter = 0; $counter < 7; $counter++) {
  echo $sum_production[$counter] . "<br>";

  if ($sum_production[$counter] > $high) {
    $high = $sum_production[$counter];
    $contestant_id = $counter;
  }
}




?>