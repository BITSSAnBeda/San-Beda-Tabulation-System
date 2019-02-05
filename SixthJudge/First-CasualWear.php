<?php
include('../config.php');
?>
<html>
    <head>
    <title>Mr. AND Ms. San Beda</title>
    <link rel="stylesheet" href="../layout/layout.css">
        <style>
            #male1.imageplaceholder {background: url(../layout/img/contestants/SBC.png); background-size: cover;}
            #female1.imageplaceholder {background: url(../layout/img/contestants/SBC.png); background-size: cover;}
            
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
    <nav style="overflow:scroll">
        <img src="../layout/img/sbclogo.png" class="sbclogo">
        
        <span class="center displayblock inbold margintop-10">Contestants</span>
        <?php
        $qwerty = "SELECT Contestant_ID FROM sixth_judge_male Order By Contestant_ID ASC";
        $result = $con->query($qwerty);
        while($res = $result->fetch_assoc()){
        ?>
        <a href="#<?php echo $res['Contestant_ID'] ?>" class="sideno top6m"><?php echo $res['Contestant_ID']?></a>
        <?php
            
            }
        
        ?>
    </nav>
<body>
    <div class="main">
        <div class="topmenu">
            <div class="titlepage">Tabulation</div>
            <p class="marginside marginbot">Official Tabulation System of San Beda Created By Bedan Information Technology Society </p>
            
            <div class="item-buttons">
            <a href="First-CasualWear.php" class="button center fleft">
                <span class="">Judging for</span><br>
                <span class="inbold">Casual Wear</span> 
            </a>
            
            <a href="Second-FormalWear.php" class="button center fleft talentf">
                <span class="">Judging for</span><br>
                <span class="inbold">Formal Wear</span> 
            </a>
                
            <a href="Third-QandA.php" class="button center fleft winnerf">
                <span class="">Judging for</span><br>
                <span class="inbold">Q &amp; A</span> 
            </a>    
                
            <div class="clear"></div>
            <div class="marginbot"></div>
            </div>
        </div>
        
        <div class="page-title top6f center">
            <p class="title center inbold margin0 allcaps">Judging for Casual Wear</p>
            <p class="description margin0 marginside">Casual Wear 20% ( Ceiling Grade = 15% )<br></p>
        </div>
        
        <div class="tabulation">
            <div class="clear"></div>

<?php      
    $a = 0;
    for($x = 0;$x <=13 ; $x++){
    
    
    $a++;
    
        
  $sql = "SELECT Contestant.Contestant_ID,Contestant.Last_Name,Contestant.First_Name,Contestant.Section,Contestant.Gender,sixth_judge_male.CasualWear FROM Contestant,sixth_judge_male WHERE Contestant.Contestant_ID = $a AND  Contestant.Gender = 'M' AND Contestant.Contestant_ID = sixth_judge_male.Contestant_ID Order By Contestant_ID ASC";
  $result = $con->query($sql);            
  while($res = $result->fetch_assoc()){
      
      $ctr = $res['CasualWear'];
?>            
            <!--Contestant 1-->
            <div class="row-clear">
                <div class="tabulation-male" id="<?php echo $res['Contestant_ID'] ?>"> 
                    <div class="tab-head top6m">
                        <p class="f30"><span class="inbold"><?php echo $res['Contestant_ID'] ?></span> | MR.</p>
                    </div>
                    <div class="clear tabulation-contestant top6m">
                    <div class="contestant fleft">
                        <div class="imageplaceholder" id="male1"></div>
                        <div class="name">Mr. <?php echo $res['Last_Name'] ?></div>
                    </div>
                        
                    <div class="tabulation-form fleft">
                        <form method="POST" action="CasualSubmit.php">

                            <div class="top6-form-group">
                                <label>Casual Wear</label><br>
                                
                                <?php
          
                                   if($ctr > 0){
                                        
                                ?>
                                
                                <input type="number" value="<?php echo $res['CasualWear']; ?>" disabled>
                                
                                <?php
                                        
                                    }else{
                                        
                                ?>
                                 
                                <input type="hidden" value="<?php echo $res['Contestant_ID']; ?>" name="one_casualmaleid">
                                <input type="hidden" value="<?php echo $res['Last_Name']; ?>" name="one_casualmalelast">
                                <input type="number" name="one_casualmalescore" class="score" placeholder="20%" min="15" max="20" required>
                                
                                
                                <?php
                                  
                                    }
      
                                ?>
                                
                                
                                
                            </div>
                            <input class="btn" type="submit" value="Enter">
                        </form>
                    </div>
                        
                    <div class="tabulation-score fleft">
                        <p class="score-summary">
                            <?php echo $res['First_Name']." ".$res['Last_Name']; ?><br/><br/>
                            <?php echo $res['Section'] ?>
                            <br/><br/>
                            Casual Wear<br><br>

                            Score <span class="inbold">15% to 20%</span>
        

                        </p>

                    </div>
                    </div>
                </div>
                <?php

  }
?>      
<?php
  $sql = "SELECT Contestant.Contestant_ID,Contestant.Last_Name,Contestant.First_Name,Contestant.Section,Contestant.Gender,sixth_judge_female.CasualWear FROM Contestant,sixth_judge_female WHERE Contestant.Contestant_ID = $a AND  Contestant.Gender = 'F' AND Contestant.Contestant_ID = sixth_judge_female.Contestant_ID Order By Contestant_ID ASC";
  $result = $con->query($sql);            
  while($res = $result->fetch_assoc()){
      $ctr = $res['CasualWear'];
?>   
                <div class="tabulation-female" id="female1"> 
                    <div class="tab-head top6f">
                        <p class="f30"><span class="inbold"><?php echo $res['Contestant_ID'] ?></span> | MS.</p>
                    </div>
                    <div class="clear tabulation-contestant top6f">
                    <div class="contestant fleft">
                        <div class="imageplaceholder" id="female1"></div>
                        <div class="name">Ms. <?php echo $res['Last_Name'] ?></div>
                    </div>
                        
                     <div class="tabulation-form fleft">
                        <form method="POST" action="CasualFemale.php">

                            <div class="top6-form-group">
                                <label>Casual Wear</label><br>
                                 
                                <?php
          
                                   if($ctr > 0){
                                        
                                ?>
                                
                                <input type="number" value="<?php echo $res['CasualWear']; ?>" disabled> 
                                
                                <?php
                                        
                                    }else{
                                        
                                ?>
                                 
                                <input type="hidden" value="<?php echo $res['Contestant_ID']; ?>" name="one_casualfmaleid">
                                <input type="hidden" value="<?php echo $res['Last_Name']; ?>" name="one_casualfmalelast">
                                <input type="number" name="one_casualfmalescore" class="score" placeholder="20%" min="15" max="20" required>
                                
                                
                                <?php
                                  
                                    }
      
                                ?>
                                
                            </div>
                            <input class="btn" type="submit" value="Enter">
                        </form>
                    </div>
                        
                     <div class="tabulation-score fleft">
                        <p class="score-summary">
                            <?php echo $res['Last_Name']." ".$res['First_Name'] ?><br/><br/>
                            <?php echo $res['Section'] ?>
                            <br/><br/>
                            Casual Wear<br><br>

                            Score <span class="inbold">15% to 20%</span><br><br>

                        </p>

                    </div>
                    </div>
                </div>
<?php

        }
        
?>                
            
            </div>
            <div class="clear"></div>
<?php
        
    }
            
?>
            <div style="margin-top:50px;margin-bottom:50px;margin-left:530px;">
            
                <a href="Second-FormalWear.php" class="btn" style="font-size:30px;">NEXT</a>
                
            </div>
            
            <br/>
            <footer><center>Copyright @2018 BITS - Velasco Medel</center></footer>
        <br/>
        </div>
    </div>
</body>
</html>