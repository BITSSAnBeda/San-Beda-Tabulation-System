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

$sum_formalwear = array(
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

  $query = "SELECT Contestant_ID, formalwear FROM first_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_formalwear[$counter_contestant] += $row['formalwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, formalwear FROM second_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_formalwear[$counter_contestant] += $row['formalwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, formalwear FROM third_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_formalwear[$counter_contestant] += $row['formalwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, formalwear FROM fourth_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_formalwear[$counter_contestant] += $row['formalwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, formalwear FROM fifth_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_formalwear[$counter_contestant] += $row['formalwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, formalwear FROM sixth_judge_male WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_formalwear[$counter_contestant] += $row['formalwear'];
  
$counter_contestant++;

}

$hcm = 0;

for($counter = 0; $counter < 7; $counter++) {
  echo $sum_formalwear[$counter] . "<br>";

  if ($sum_formalwear[$counter] > $hcm) {
    $hfm = $sum_formalwear[$counter];
    $contestant_id = $counter;
  }
}

$query = "SELECT Last_Name FROM Contestant WHERE Contestant_ID = $contestant_id AND Gender = 'M'";
$result = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($result);
$rfm = $row['Last_Name'];




?>