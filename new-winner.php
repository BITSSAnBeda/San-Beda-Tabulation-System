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

  if ($sum_qa[$counter] > $hqf) {
    $hqf = $sum_qa[$counter];
    $contestant_id = $counter;
  }
}

$query = "SELECT Last_Name FROM Contestant WHERE Contestant_ID = $contestant_id AND Gender = 'F'";
$result = mysqli_query($con, $query);

if (!$result) {
  $rqf = "";
} else {
  $row = mysqli_fetch_assoc($result);
  $rqf = $row['Last_Name'];

}




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

  if ($sum_qa[$counter] > $hqm) {
    $hqm = $sum_qa[$counter];
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

$sum_formalwear = array(
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

  $query = "SELECT Contestant_ID, formalwear FROM first_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_formalwear[$counter_contestant] += $row['formalwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 9) {

  $query = "SELECT Contestant_ID, formalwear FROM second_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_formalwear[$counter_contestant] += $row['formalwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 9) {

  $query = "SELECT Contestant_ID, formalwear FROM third_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_formalwear[$counter_contestant] += $row['formalwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 9) {

  $query = "SELECT Contestant_ID, formalwear FROM fourth_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_formalwear[$counter_contestant] += $row['formalwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 9) {

  $query = "SELECT Contestant_ID, formalwear FROM fifth_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_formalwear[$counter_contestant] += $row['formalwear'];
  
$counter_contestant++;

}

$counter_contestant = 0;

while ($counter_contestant < 9) {

  $query = "SELECT Contestant_ID, formalwear FROM sixth_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_formalwear[$counter_contestant] += $row['formalwear'];
  
$counter_contestant++;

}

$hff = 0;

for($counter = 0; $counter < 9; $counter++) {

  if ($sum_formalwear[$counter] > $hff) {
    $hff = $sum_formalwear[$counter];
    $contestant_id = $counter;
  }
}

$query = "SELECT Last_Name FROM Contestant WHERE Contestant_ID = $contestant_id AND Gender = 'F'";
$result = mysqli_query($con, $query);

if (!$result) {
  $rff = "";
} else {
  $row = mysqli_fetch_assoc($result);
  $rff = $row['Last_Name'];

}




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

$hfm = 0;

for($counter = 0; $counter < 7; $counter++) {

  if ($sum_formalwear[$counter] > $hfm) {
    $hfm = $sum_formalwear[$counter];
    $contestant_id = $counter;
  }
}

$query = "SELECT Last_Name FROM Contestant WHERE Contestant_ID = $contestant_id AND Gender = 'M'";
$result = mysqli_query($con, $query);

if (!$result) {
  $rfm = "";
} else {
  $row = mysqli_fetch_assoc($result);
  $rfm = $row['Last_Name'];

}

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

while ($counter_contestant < 7) {

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

while ($counter_contestant < 7) {

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

while ($counter_contestant < 7) {

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

while ($counter_contestant < 7) {

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

while ($counter_contestant < 7) {

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

while ($counter_contestant < 7) {

  $query = "SELECT Contestant_ID, casualwear FROM sixth_judge_female WHERE Contestant_ID = $contestant_id[$counter_contestant]";
  $result = mysqli_query($con, $query);

  if (!$result) {
    die(mysqli_error($con));
  }

  $row = mysqli_fetch_assoc($result);
  $sum_casualwear[$counter_contestant] += $row['casualwear'];
  
$counter_contestant++;

}

$hcf = 0;

for($counter = 0; $counter < 7; $counter++) {

  if ($sum_casualwear[$counter] > $hcf) {
    $hcf = $sum_casualwear[$counter];
    $contestant_id = $counter;
  }
}

$query = "SELECT Last_Name FROM Contestant WHERE Contestant_ID = $contestant_id AND Gender = 'F'";
$result = mysqli_query($con, $query);

if (!$result) {
  $rcf = "";
} else {
  $row = mysqli_fetch_assoc($result);
  $rcf = $row['Last_Name'];

}



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
  

  if ($sum_casualwear[$counter] > $hcm) {
    $hcm = $sum_casualwear[$counter];
    $contestant_id = $counter;
  }
}

$query = "SELECT Last_Name FROM Contestant WHERE Contestant_ID = $contestant_id AND Gender = 'M'";
$result = mysqli_query($con, $query);

if (!$result) {
  $rcm = "";
} else {
  $row = mysqli_fetch_assoc($result);
  $rcm = $row['Last_Name'];

}


// PRODUCTION - MALE
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

$high_production = 0;

for($counter = 0; $counter < 7; $counter++) {
  echo $sum_production[$counter] . "<br>";
  if ($sum_production[$counter] > $high_production) {
    $high_production = $sum_production[$counter];
    $contestant_id = $counter;
  }
}

$query = "SELECT Last_Name FROM Contestant WHERE Contestant_ID = $contestant_id AND Gender = 'M'";
$result = mysqli_query($con, $query);

if (!$result) {
  $rmp = "";
} else {
  $row = mysqli_fetch_assoc($result);
  $rmp = $row['Last_Name'];

}
// Production - Female


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

$hpf = 0;

for($counter = 0; $counter < 7; $counter++) {


  if ($sum_production[$counter] > $hpf) {
    $hpf = $sum_production[$counter];
    $contestant_id = $counter;
  }
}

$query = "SELECT Last_Name FROM Contestant WHERE Contestant_ID = $contestant_id AND Gender = 'F'";
$result = mysqli_query($con, $query);
if (!$result) {
  $rfp = "";
} else {
  $row = mysqli_fetch_assoc($result);
  $rfp = $row['Last_Name'];

}













//First
$total1 = "SELECT onetopsixmale.Contestant_ID , onetopsixmale.Last_Name,(onetopsixmale.Beauty + onetopsixmale.Intelligence)AS Total FROM onetopsixmale";
$result1 = $con->query($total1);
while($res = $result1->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import1 = "UPDATE `winnermale` SET `firstjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result11 = $con->query($import1);
}

$total2 = "SELECT first_judge_female.Contestant_ID , first_judge_female.Last_Name,(first_judge_female.CasualWear + first_judge_female.FormalWear + first_judge_female.Production + first_judge_female.QA)as Total FROM first_judge_female";
$result2 = $con->query($total2);
while($res = $result2->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import2 = "UPDATE `Masterlist_female` SET `firstjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result21 = $con->query($import2);
}


//Second
$total3 = "SELECT second_judge_male.Contestant_ID , second_judge_male.Last_Name,(second_judge_male.CasualWear + second_judge_male.FormalWear + second_judge_male.Production + second_judge_male.QA)as Total FROM second_judge_male";
$result3 = $con->query($total3);
while($res = $result3->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import3 = "UPDATE `Masterlist_male` SET `secondjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result31 = $con->query($import3);
}

$total4 = "SELECT second_judge_female.Contestant_ID , second_judge_female.Last_Name,(second_judge_female.CasualWear + second_judge_female.FormalWear + second_judge_female.Production + second_judge_female.QA)as Total FROM second_judge_female";
$result4 = $con->query($total4);
while($res = $result4->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import4 = "UPDATE `Masterlist_female` SET `secondjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result41 = $con->query($import4);
}


//Third
$total5 = "SELECT third_judge_male.Contestant_ID , third_judge_male.Last_Name,(third_judge_male.CasualWear + third_judge_male.FormalWear + third_judge_male.Production + third_judge_male.QA)as Total FROM third_judge_male";
$result5 = $con->query($total5);
while($res = $result5->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import5 = "UPDATE `Masterlist_male` SET `thirdjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result51 = $con->query($import5);
}

$total6 = "SELECT third_judge_female.Contestant_ID , third_judge_female.Last_Name,(third_judge_female.CasualWear + third_judge_female.FormalWear + third_judge_female.Production + third_judge_female.QA)as Total FROM third_judge_female";
$result6 = $con->query($total6);
while($res = $result6->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import6 = "UPDATE `Masterlist_female` SET `thirdjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result61 = $con->query($import6);
}



//Fourth
$total7 = "SELECT fourth_judge_male.Contestant_ID , fourth_judge_male.Last_Name,(fourth_judge_male.CasualWear + fourth_judge_male.FormalWear + fourth_judge_male.Production + fourth_judge_male.QA)as Total FROM fourth_judge_male";
$result7 = $con->query($total7);
while($res = $result7->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import7 = "UPDATE `Masterlist_male` SET `fourthjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result71 = $con->query($import7);
}

$total8 = "SELECT fourth_judge_female.Contestant_ID , fourth_judge_female.Last_Name,(fourth_judge_female.CasualWear + fourth_judge_female.FormalWear + fourth_judge_female.Production + fourth_judge_female.QA)as Total FROM fourth_judge_female";
$result8 = $con->query($total8);
while($res = $result8->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import8 = "UPDATE `Masterlist_female` SET `fourthjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result81 = $con->query($import8);
}

//Fifth
$total9 = "SELECT fifth_judge_male.Contestant_ID , fifth_judge_male.Last_Name,(fifth_judge_male.CasualWear + fifth_judge_male.FormalWear + fifth_judge_male.Production + fifth_judge_male.QA)as Total FROM fifth_judge_male";
$result9 = $con->query($total9);
while($res = $result9->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import9 = "UPDATE `Masterlist_male` SET `fifthjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result91 = $con->query($import9);
}

$total10 = "SELECT fifth_judge_female.Contestant_ID , fifth_judge_female.Last_Name,(fifth_judge_female.CasualWear + fifth_judge_female.FormalWear + fifth_judge_female.Production + fifth_judge_female.QA)as Total FROM fifth_judge_female";
$result10 = $con->query($total10);
while($res = $result10->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import12 = "UPDATE `Masterlist_female` SET `fifthjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result12 = $con->query($import12);
}


//Sixth
$total11 = "SELECT sixth_judge_male.Contestant_ID , sixth_judge_male.Last_Name,(sixth_judge_male.CasualWear + sixth_judge_male.FormalWear + sixth_judge_male.Production + sixth_judge_male.QA)as Total FROM sixth_judge_male";
$result11 = $con->query($total11);
while($res = $result11->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import12 = "UPDATE `Masterlist_male` SET `sixthjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result12 = $con->query($import12);
}

$total12 = "SELECT sixth_judge_female.Contestant_ID , sixth_judge_female.Last_Name,(sixth_judge_female.CasualWear + sixth_judge_female.FormalWear + sixth_judge_female.Production + sixth_judge_female.QA)as Total FROM sixth_judge_female";
$result12 = $con->query($total12);
while($res = $result12->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import13 = "UPDATE `Masterlist_female` SET `sixthjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result13 = $con->query($import13);
}

//Seventh
$total13 = "SELECT seven_judge_male.Contestant_ID , seven_judge_male.Last_Name,(seven_judge_male.CasualWear + seven_judge_male.FormalWear + seven_judge_male.Production + seven_judge_male.QA)as Total FROM seven_judge_male";
$result13 = $con->query($total13);
while($res = $result13->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import14 = "UPDATE `Masterlist_male` SET `sevenjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result14 = $con->query($import14);
}

$total14 = "SELECT seven_judge_female.Contestant_ID , seven_judge_female.Last_Name,(seven_judge_female.CasualWear + seven_judge_female.FormalWear + seven_judge_female.Production + seven_judge_female.QA)as Total FROM seven_judge_female";
$result14 = $con->query($total6);
while($res = $result14->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import15 = "UPDATE `Masterlist_female` SET `sevenjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result15 = $con->query($import15);
}
?>
<html>
    <head>
    <title>Winners</title>
    <link rel="stylesheet" href="layout/layout.css">
    </head>
    <nav>
        <img src="layout/img/sbclogo.png" class="sbclogo">
    </nav>
    <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
            
        .btn {border-radius: 12px;
              height: auto;
              width: 80px;
              margin-left: 55px;
              background-color:white;
            }.btn:hover{
                background-color: red;
                border-color: red;
            }
            .mright{
                margin-right: 15px;
            }
        </style>
        
<body>
    <div class="main">
        <div class="topmenu">
            <div class="titlepage">Winners</div>

            <div class="clear"></div>
            <div class="marginbot"></div>
            </div>
        </div>
        
        <!-- PRODUCTION -->
        
        <div class="tabulation" style="margin-left: 180px;">

        
        <div class="row-clear">
            <!-- PRODUCTION MALE -->
            <div class="tabulation-male"> 
                <div class="tab-head talentm">
                        <p class="f30"><span class="inbold">PROD.</span> | MR.</p>
                    </div>
                    <div class="clear tabulation-contestant talentm">
                        <div class="contestant fleft">
                            <div class="imageplaceholder"></div>
                            <!-- MALE WINNER NAME -->
                            <div class="name"><?=$rmp?></div>
                        </div>                
                        <div class="tabulation-score fleft" style="margin-left: 100px;">
                            <p class="score-summary">
                                Score Summary<br><br>
                                <br>
                                <br>

                                Total:<br>
                                <!-- MALE WINNER SCORE -->
                                <span class="inbold f30"><?=$high_production?></span>

                            </p>

                        </div>
                    </div>
                </div>
            <!-- PRODUCTION FEMALE -->
            <div class="tabulation-female"> 
                <div class="tab-head talentf">
                    <p class="f30"><span class="inbold">PROD.</span> | MS.</p>
                </div>
                <div class="clear tabulation-contestant talentf">
                    <div class="contestant fleft">
                        <div class="imageplaceholder"></div>
                        <!--FEMALE WINNER NAME -->
                        <div class="name"><?=$rfp?></div>
                    </div>
                    <div class="tabulation-score fleft" style="margin-left: 100px;">
                        <p class="score-summary">
                            Score Summary<br><br>
                            <br>
                            <br>

                            Total:<br>
                            <!-- FEMALE WINNER SCORE -->
                            <span class="inbold f30"><?=$hpf?></span>

                        </p>
    
                    </div>
                </div>
            </div>
        </div>

        <!-- CASUAL-->
        
        <div class="row-clear">
            <!-- CASUAL MALE -->
            <div class="tabulation-male" style="margin-top:100px;"> 
                <div class="tab-head talentm">
                        <p class="f30"><span class="inbold">CASUAL</span> | MR.</p>
                    </div>
                    <div class="clear tabulation-contestant talentm">
                        <div class="contestant fleft">
                            <div class="imageplaceholder"></div>
                            <!-- MALE WINNER NAME -->
                            <div class="name"><?=$rcm?></div>
                        </div>                
                        <div class="tabulation-score fleft" style="margin-left: 100px;">
                            <p class="score-summary">
                                Score Summary<br><br>
                                <br>
                                <br>

                                Total:<br>
                                <!-- MALE WINNER SCORE -->
                                <span class="inbold f30"><?=$hcm?></span>

                            </p>

                        </div>
                    </div>
                </div>
            <!-- CASUAL FEMALE -->
            <div class="tabulation-female" style="margin-top:100px;"> 
                <div class="tab-head talentf">
                    <p class="f30"><span class="inbold">CASUAL</span> | MS.</p>
                </div>
                <div class="clear tabulation-contestant talentf">
                    <div class="contestant fleft">
                        <div class="imageplaceholder"></div>
                        <!--FEMALE WINNER NAME -->
                        <div class="name"><?=$rcf?></div>
                    </div>
                    <div class="tabulation-score fleft" style="margin-left: 100px;">
                        <p class="score-summary">
                            Score Summary<br><br>
                            <br>
                            <br>

                            Total:<br>
                            <!-- FEMALE WINNER SCORE -->
                            <span class="inbold f30"><?=$hcf?></span>

                        </p>
    
                    </div>
                </div>
            </div>

        <!-- FORMAL -->
        
        <div class="row-clear">
            <!-- FORMAL MALE -->
            <div class="tabulation-male" style="margin-top:100px;"> 
                <div class="tab-head talentm">
                        <p class="f30"><span class="inbold">FORMAL</span> | MR.</p>
                    </div>
                    <div class="clear tabulation-contestant talentm">
                        <div class="contestant fleft">
                            <div class="imageplaceholder"></div>
                            <!-- MALE WINNER NAME -->
                            <div class="name"><?=$rfm?></div>
                        </div>                
                        <div class="tabulation-score fleft" style="margin-left: 100px;">
                            <p class="score-summary">
                                Score Summary<br><br>
                                <br>
                                <br>

                                Total:<br>
                                <!-- MALE WINNER SCORE -->
                                <span class="inbold f30"><?=$hfm?></span>

                            </p>

                        </div>
                    </div>
                </div>
            <!-- FORMAL FEMALE -->
            <div class="tabulation-female" style="margin-top:100px;"> 
                <div class="tab-head talentf">
                    <p class="f30"><span class="inbold">FORMAL</span> | MS.</p>
                </div>
                <div class="clear tabulation-contestant talentf">
                    <div class="contestant fleft">
                        <div class="imageplaceholder"></div>
                        <!--FEMALE WINNER NAME -->
                        <div class="name"><?=$rff?></div>
                    </div>
                    <div class="tabulation-score fleft" style="margin-left: 100px;">
                        <p class="score-summary">
                            Score Summary<br><br>
                            <br>
                            <br>

                            Total:<br>
                            <!-- FEMALE WINNER SCORE -->
                            <span class="inbold f30"><?=$hff?></span>

                        </p>

                    </div>
                </div>
            </div>

        <!-- Q&A -->
        
        <div class="row-clear">
                <!-- Q&A MALE -->
                <div class="tabulation-male" style="margin-top:100px; margin-bottom: 100px"> 
                    <div class="tab-head talentm">
                            <p class="f30"><span class="inbold">Q&A</span> | MR.</p>
                        </div>
                        <div class="clear tabulation-contestant talentm">
                            <div class="contestant fleft">
                                <div class="imageplaceholder"></div>
                                <!-- MALE WINNER NAME -->
                                <div class="name"><?=$rqm?></div>
                            </div>                
                            <div class="tabulation-score fleft" style="margin-left: 100px;">
                                <p class="score-summary">
                                    Score Summary<br><br>
                                    <br>
                                    <br>

                                    Total:<br>
                                    <!-- MALE WINNER SCORE -->
                                    <span class="inbold f30"><?=$hqm?></span>

                                </p>

                            </div>
                        </div>
                    </div>
                <!-- Q&A FEMALE -->
                <div class="tabulation-female" style="margin-top:100px; margin-bottom:100px;"> 
                    <div class="tab-head talentf">
                        <p class="f30"><span class="inbold">Q&A</span> | MS.</p>
                    </div>
                    <div class="clear tabulation-contestant talentf">
                        <div class="contestant fleft">
                            <div class="imageplaceholder"></div>
                            <!--FEMALE WINNER NAME -->
                            <div class="name"><?=$rqf?></div>
                        </div>
                        <div class="tabulation-score fleft" style="margin-left: 100px;">
                            <p class="score-summary">
                                Score Summary<br><br>
                                <br>
                                <br>

                                Total:<br>
                                <!-- FEMALE WINNER SCORE -->
                                <span class="inbold f30"><?=$hqf?></span>

                            </p>
        
                        </div>
                    </div>
                </div>
                
    </div>
    <div class="main">
        <div class="topmenu">
            <div class="titlepage">Tabulation</div>
            <p class="marginside marginbot">Official Tabulation System of San Beda Created By Bedan Information Technology Society</p>
            
           
        </div>
        
        
        
        <div class="tabulation">
            <div class="clear"></div>
            <?php
            $sql = "SELECT * FROM Masterlist_male Order By Contestant_ID ASC";
            $result = $con->query($sql);
            ?>
            <!--Contestant 1-->
            <div class="row-clear">
                <center><h1>OVERALL - MALE Results</h1></center>
                <br/>
<table>
                    <tr>
                        <th>Contestant Number</th>
                        <th>Name</th>
                        <th>Judge 1</th>
                        <th>Judge 2</th>
                        <th>Judge 3</th>
                        <th>Judge 4</th>
                        <th>Judge 5</th>
                        <th>Judge 6</th>
                        <th>Total</th>
                    </tr>
        <?php
        $gm = array (
          10,
          9,
          8,
          10,
          10,
          10,
          7,
        );
        $counter_gm = 0;
        while($res = $result->fetch_assoc()){
        $a = $res['firstjudge'];
        $b = $res['secondjudge'];
        $c = $res['thirdjudge'];
        $d = $res['fourthjudge'];
        $e = $res['fifthjudge'];
        $f = $res['sixthjudge'];
        $ave = 7;
        $sum = $a + $b + $c + $d + $e + $f + $gm[$counter_gm];
        $average = $sum/7;
        ?>
                    <tr>
                        <td><?php echo $res['Contestant_ID'] ?></td>
                        <td><?php echo $res['Last_Name'] ?></td>
                        <td><?php echo $res['firstjudge'] ?></td>
                        <td><?php echo $res['secondjudge'] ?></td>
                        <td><?php echo $res['thirdjudge'] ?></td>
                        <td><?php echo $res['fourthjudge'] ?></td>
                        <td><?php echo $res['fifthjudge'] ?></td>
                        <td><?php echo $res['sixthjudge'] ?></td>
                        <td><?php echo number_format((float)$average, 2, '.', ''); ?></td>
                    </tr>
        <?php
        $counter_gm++;
        }
        ?>
    
</table>
                
            <?php
            $sql = "SELECT * FROM Masterlist_female Order By Contestant_ID ASC";
            $result = $con->query($sql);
            ?>
                
                  <center><h1>OVERALL - FEMALE Results</h1></center>
                <br/>
                <table>
                    <tr>
                        <th>Contestant Number</th>
                        <th>Name</th>
                        <th>Judge 1</th>
                        <th>Judge 2</th>
                        <th>Judge 3</th>
                        <th>Judge 4</th>
                        <th>Judge 5</th>
                        <th>Judge 6</th>
                        <th>Total</th>
                    </tr>
        <?php
        
        while($res = $result->fetch_assoc()){
          $a = $res['firstjudge'];
          $b = $res['secondjudge'];
          $c = $res['thirdjudge'];
          $d = $res['fourthjudge'];
          $e = $res['fifthjudge'];
          $f = $res['sixthjudge'];
          $g = 10;
          $ave = 7;
          $sum = $a + $b + $c + $d + $e + $f + $g;
          $average = $sum/7;
          ?>
                      <tr>
                          <td><?php echo $res['Contestant_ID'] ?></td>
                          <td><?php echo $res['Last_Name'] ?></td>
                          <td><?php echo $res['firstjudge'] ?></td>
                          <td><?php echo $res['secondjudge'] ?></td>
                          <td><?php echo $res['thirdjudge'] ?></td>
                          <td><?php echo $res['fourthjudge'] ?></td>
                          <td><?php echo $res['fifthjudge'] ?></td>
                          <td><?php echo $res['sixthjudge'] ?></td>
                          <td><?php echo number_format((float)$average, 2, '.', ''); ?></td>
                      </tr>
          <?php
          }
          ?>
      
        ?>
    
</table>
            
            </div>
            <div class="clear"></div>

            <div style="margin-top:50px;margin-bottom:50px;margin-left:530px;">
                
            </div>
            
            <br/>
            <footer><center>Copyright @2018 BITS - Velasco Medel</center></footer>
        <br/>
        </div>
    </div>
    
    
</body>
</html>