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

$sum_qa = array(
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

  $query = "SELECT Contestant_ID, qa FROM first_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_qa[$counter_contestant] += $row['qa'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 9) {

  $query = "SELECT Contestant_ID, qa FROM second_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_qa[$counter_contestant] += $row['qa'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 9) {

  $query = "SELECT Contestant_ID, qa FROM third_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_qa[$counter_contestant] += $row['qa'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 9) {

  $query = "SELECT Contestant_ID, qa FROM fourth_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_qa[$counter_contestant] += $row['qa'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 9) {

  $query = "SELECT Contestant_ID, qa FROM fifth_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_qa[$counter_contestant] += $row['qa'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 9) {

  $query = "SELECT Contestant_ID, qa FROM sixth_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_qa[$counter_contestant] += $row['qa'];
  
$counter_contestant++;

}

$hqf = 0;

for($counter = 0; $counter < 9; $counter++) {
  echo $sum_qa[$counter] . "<br>";

  if ($sum_qa[$counter] > $hqf) {
    $hfm = $sum_qa[$counter];
    $contestant_id = $counter;
  }
}

$query = "SELECT Last_Name FROM Contestant WHERE Contestant_ID = $contestant_id AND Gender = 'M'";
$result = mysqli_query($con, $query);

if (!$result) {
  $rqf = "";
} else {
  $row = mysqli_fetch_assoc($result);
  $rqf = $row['Last_Name'];

}



?>