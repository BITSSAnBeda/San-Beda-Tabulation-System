<?php
include('config.php');

//First
$total1 = "SELECT first_judge_male.Contestant_ID , first_judge_male.Last_Name,(first_judge_male.FormalWear)as Total FROM first_judge_male";
$result1 = $con->query($total1);
while($res = $result1->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import1 = "UPDATE `Masterlist_male` SET `firstjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result11 = $con->query($import1);
}

$total2 = "SELECT first_judge_female.Contestant_ID , first_judge_female.Last_Name,(first_judge_female.FormalWear)as Total FROM first_judge_female";
$result2 = $con->query($total2);
while($res = $result2->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import2 = "UPDATE `Masterlist_female` SET `firstjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result21 = $con->query($import2);
}


//Second
$total3 = "SELECT second_judge_male.Contestant_ID , second_judge_male.Last_Name,(second_judge_male.FormalWear)as Total FROM second_judge_male";
$result3 = $con->query($total3);
while($res = $result3->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import3 = "UPDATE `Masterlist_male` SET `secondjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result31 = $con->query($import3);
}

$total4 = "SELECT second_judge_female.Contestant_ID , second_judge_female.Last_Name,(second_judge_female.FormalWear)as Total FROM second_judge_female";
$result4 = $con->query($total4);
while($res = $result4->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import4 = "UPDATE `Masterlist_female` SET `secondjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result41 = $con->query($import4);
}


//Third
$total5 = "SELECT third_judge_male.Contestant_ID , third_judge_male.Last_Name,(third_judge_male.FormalWear)as Total FROM third_judge_male";
$result5 = $con->query($total5);
while($res = $result5->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import5 = "UPDATE `Masterlist_male` SET `thirdjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result51 = $con->query($import5);
}

$total6 = "SELECT third_judge_female.Contestant_ID , third_judge_female.Last_Name,(third_judge_female.FormalWear)as Total FROM third_judge_female";
$result6 = $con->query($total6);
while($res = $result6->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import6 = "UPDATE `Masterlist_female` SET `thirdjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result61 = $con->query($import6);
}



//Fourth
$total7 = "SELECT fourth_judge_male.Contestant_ID , fourth_judge_male.Last_Name,(fourth_judge_male.FormalWear)as Total FROM fourth_judge_male";
$result7 = $con->query($total7);
while($res = $result7->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import7 = "UPDATE `Masterlist_male` SET `fourthjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result71 = $con->query($import7);
}

$total8 = "SELECT fourth_judge_female.Contestant_ID , fourth_judge_female.Last_Name,(fourth_judge_female.FormalWear)as Total FROM fourth_judge_female";
$result8 = $con->query($total8);
while($res = $result8->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import8 = "UPDATE `Masterlist_female` SET `fourthjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result81 = $con->query($import8);
}

//Fifth
$total9 = "SELECT fifth_judge_male.Contestant_ID , fifth_judge_male.Last_Name,(fifth_judge_male.FormalWear)as Total FROM fifth_judge_male";
$result9 = $con->query($total9);
while($res = $result9->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import9 = "UPDATE `Masterlist_male` SET `fifthjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result91 = $con->query($import9);
}

$total10 = "SELECT fifth_judge_female.Contestant_ID , fifth_judge_female.Last_Name,(fifth_judge_female.FormalWear)as Total FROM fifth_judge_female";
$result10 = $con->query($total10);
while($res = $result10->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import12 = "UPDATE `Masterlist_female` SET `fifthjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result12 = $con->query($import12);
}


//Sixth
$total11 = "SELECT sixth_judge_male.Contestant_ID , sixth_judge_male.Last_Name,(sixth_judge_male.FormalWear)as Total FROM sixth_judge_male";
$result11 = $con->query($total11);
while($res = $result11->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import12 = "UPDATE `Masterlist_male` SET `sixthjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result12 = $con->query($import12);
}

$total12 = "SELECT sixth_judge_female.Contestant_ID , sixth_judge_female.Last_Name,(sixth_judge_female.FormalWear)as Total FROM sixth_judge_female";
$result12 = $con->query($total12);
while($res = $result12->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import13 = "UPDATE `Masterlist_female` SET `sixthjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result13 = $con->query($import13);
}

//Seventh
$total13 = "SELECT seven_judge_male.Contestant_ID , seven_judge_male.Last_Name,(seven_judge_male.FormalWear)as Total FROM seven_judge_male";
$result13 = $con->query($total13);
while($res = $result13->fetch_assoc()){
    $id = $res['Contestant_ID'];
    $last = $res['Last_Name'];
    $total = $res['Total'];
    
$import14 = "UPDATE `Masterlist_male` SET `sevenjudge`= $total WHERE Contestant_ID = $id AND Last_Name = '$last'";
$result14 = $con->query($import14);
}

$total14 = "SELECT seven_judge_female.Contestant_ID , seven_judge_female.Last_Name,(seven_judge_female.FormalWear)as Total FROM seven_judge_female";
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
    <title>Mr. AND Ms. San Beda</title>
    <link rel="stylesheet" href="layout/layout.css">
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
        
    </head>
<body>
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
                <center><h1>Formal - MALE Results</h1></center>
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
                        <th>Judge 7</th>
                        <th>Total by Judges</th>
                    </tr>
        <?php
        
        while($res = $result->fetch_assoc()){
        $a = $res['firstjudge'];
        $b = $res['secondjudge'];
        $c = $res['thirdjudge'];
        $d = $res['fourthjudge'];
        $e = $res['fifthjudge'];
        $f = $res['sixthjudge'];
        $g = $res['sevenjudge'];
        $ave = 7;
        $sum = $a + $b + $c + $d + $e + $f + $g;
        $average = $sum/7;
        $totalaveragejudges= $average*.9;
        
        
        
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
                        <td><?php echo $res['sevenjudge'] ?></td>
                        <td><?php echo number_format((float)$average, 2, '.', ''); ?></td>
                        
                    </tr>
        <?php
        }
        ?>
    
</table>
                
                
            <?php
            $sql = "SELECT * FROM Masterlist_female Order By Contestant_ID ASC";
            $result = $con->query($sql);
            ?>
                
                  <center><h1>Formal - FEMALE Results</h1></center>
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
                        <th>Judge 7</th>
                        <th>Total by Judges</th>

                    </tr>
        <?php
        
        while($res = $result->fetch_assoc()){
            $a = $res['firstjudge'];
            $b = $res['secondjudge'];
            $c = $res['thirdjudge'];
            $d = $res['fourthjudge'];
            $e = $res['fifthjudge'];
            $f = $res['sixthjudge'];
            $g = $res['sevenjudge'];
            $ave = 7;
            $sum = $a + $b + $c + $d + $e + $f + $g;
            $average = $sum/7;
            $totalaveragejudges= $average;
            
    
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
                        <td><?php echo $res['sevenjudge'] ?></td>
                        <td><?php echo number_format((float)$average, 2, '.', ''); ?></td>
                    </tr>
        <?php
        }
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