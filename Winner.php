<?php
include('config.php');

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
        
        while($res = $result->fetch_assoc()){
        $a = $res['firstjudge'];
        $b = $res['secondjudge'];
        $c = $res['thirdjudge'];
        $d = $res['fourthjudge'];
        $e = $res['fifthjudge'];
        $f = $res['sixthjudge'];
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