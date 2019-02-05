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

  $query = "SELECT Contestant_ID, Production FROM first_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
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

  $query = "SELECT Contestant_ID, Production FROM second_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
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

  $query = "SELECT Contestant_ID, Production FROM third_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
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

  $query = "SELECT Contestant_ID, Production FROM fourth_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
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

  $query = "SELECT Contestant_ID, Production FROM fifth_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
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

  $query = "SELECT Contestant_ID, Production FROM sixth_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
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