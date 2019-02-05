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
        $qwerty = "SELECT Contestant_ID FROM onetopsixmale";
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
            
        </div>
        
        <div class="page-title top6f center">
            <p class="title center inbold margin0 allcaps">Selection of Winners</p>
            <p class="description margin0 marginside">Beauty 50% and Intelligence 50% ( Ceiling Grade = 40% )<br></p>
        </div>
        
        <div class="tabulation">
            <div class="clear"></div>

<?php      
    $a = 0;
    for($x = 0;$x <=14 ; $x++){
    
    
    $a++;
    
        
  $sql = "SELECT Contestant.Contestant_ID,Contestant.Last_Name,Contestant.First_Name,Contestant.Section,Contestant.Gender,onetopsixmale.Beauty,onetopsixmale.Intelligence FROM Contestant,onetopsixmale WHERE Contestant.Contestant_ID = $a AND  Contestant.Gender = 'M' AND Contestant.Contestant_ID = onetopsixmale.Contestant_ID Order By Contestant_ID";
  $result = $con->query($sql);            
  while($res = $result->fetch_assoc()){
      
      $ctr = $res['Beauty'];
      $ctr2 = $res['Intelligence'];
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
                        <form method="POST" action="FourthSubmit.php">

                            <div class="top6-form-group">
                                <label>Beauty</label><br>
                                
                                <?php
          
                                   if($ctr > 0){
                                        
                                ?>
                                
                                <input type="number" value="<?php echo $res['Beauty']; ?>" disabled>
                                
                                <?php
                                        
                                    }else{
                                        
                                ?>
                                 
                                <input type="hidden" value="<?php echo $res['Contestant_ID']; ?>" name="one_beautymaleid">
                                <input type="hidden" value="<?php echo $res['Last_Name']; ?>" name="one_beautymalelast">
                                <input type="number" name="one_beautymalescore" class="score" placeholder="50%" min="40" max="50" required>
                                
                                
                                <?php
                                  
                                    }
      
                                ?>
                                
                                <label>Intelligence</label><br>
                                
                                <?php
          
                                   if($ctr2 > 0){
                                        
                                ?>
                                
                                <input type="number" value="<?php echo $res['Intelligence']; ?>" disabled>
                                
                                <?php
                                        
                                    }else{
                                        
                                ?>
                                 
                                <input type="hidden" value="<?php echo $res['Contestant_ID']; ?>" name="one_intmaleid">
                                <input type="hidden" value="<?php echo $res['Last_Name']; ?>" name="one_intmalelast">
                                <input type="number" name="one_intmalescore" class="score" placeholder="50%" min="40" max="50" required>
                                
                                
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
                            Beauty and Intelligence<br><br>

                            Score <span class="inbold">40% to 50%</span>
        

                        </p>

                    </div>
                    </div>
                </div>
                <?php

  }

  $sql = "SELECT Contestant.Contestant_ID,Contestant.Last_Name,Contestant.First_Name,Contestant.Section,Contestant.Gender,onetopsixfemale.Beauty,onetopsixfemale.Intelligence FROM Contestant,onetopsixfemale WHERE Contestant.Contestant_ID = $a AND  Contestant.Gender = 'F' AND Contestant.Contestant_ID = onetopsixfemale.Contestant_ID Order By Contestant_ID ASC";
  $result = $con->query($sql);            
  while($res = $result->fetch_assoc()){
      
      $ctr = $res['Beauty'];
      $ctr2 = $res['Intelligence'];

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
                        <form method="POST" action="FourthFemale.php">

                            <div class="top6-form-group">
                                <label>Beauty</label><br>
                                 
                                <?php
          
                                   if($ctr > 0){
                                        
                                ?>
                                
                                <input type="number" value="<?php echo $res['Beauty']; ?>" disabled> 
                                
                                <?php
                                        
                                    }else{
                                        
                                ?>
                                 
                                <input type="hidden" value="<?php echo $res['Contestant_ID']; ?>" name="one_beautyfmaleid">
                                <input type="hidden" value="<?php echo $res['Last_Name']; ?>" name="one_beautyfmalelast">
                                <input type="number" name="one_beautyfmalescore" class="score" placeholder="50%" min="40" max="50" required>
                                
                                
                                <?php
                                  
                                    }
      
                                ?>
                                
                                <label>Intelligence</label><br>
                                 
                                <?php
          
                                   if($ctr2 > 0){
                                        
                                ?>
                                
                                <input type="number" value="<?php echo $res['Intelligence']; ?>" disabled> 
                                
                                <?php
                                        
                                    }else{
                                        
                                ?>
                                 
                                <input type="hidden" value="<?php echo $res['Contestant_ID']; ?>" name="one_intfmaleid">
                                <input type="hidden" value="<?php echo $res['Last_Name']; ?>" name="one_intfmalelast">
                                <input type="number" name="one_intfmalescore" class="score" placeholder="50%" min="40" max="50" required>
                                
                                
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
                            Beauty and Intelligence<br><br>

                            Score <span class="inbold">40% to 50%</span><br><br>

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
            
                <a href="END.php" class="btn" style="font-size:30px;">NEXT</a>
                
            </div>
            
            <br/>
            <footer><center>Copyright @2018 BITS - Velasco Medel</center></footer>
        <br/>
        </div>
    </div>
</body>
</html>