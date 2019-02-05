<?php
include('config.php');
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
            $sql = "SELECT *,(firstjudge + secondjudge + thirdjudge + fourthjudge + fifthjudge + sixthjudge + sevenjudge)as Sum FROM Masterlist_male ORDER BY `Sum` DESC LIMIT 6";
            $result = $con->query($sql);
            ?>
            <!--Contestant 1-->
            <div class="row-clear">
                <center><h1>TOP 6 Results</h1></center>
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
                        <th>Total</th>
                    </tr>
        <?php
        
        while($res = $result->fetch_assoc()){
        $sum = $res['Sum'];
        $ave = 7;
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
                        <td><?php echo $res['sevenjudge'] ?></td>
                        <td><?php echo number_format((float)$average, 2, '.', ''); ?></td>
                    </tr>
        <?php
        }
        ?>
    
</table>
            
                
                
                <?php
            $sql = "SELECT *,(firstjudge + secondjudge + thirdjudge + fourthjudge + fifthjudge + sixthjudge + sevenjudge)as Sum FROM Masterlist_female ORDER BY `Sum` DESC LIMIT 6";
            $result = $con->query($sql);
            ?>
            <!--Contestant 1-->
            <div class="row-clear">
                <center><h1>TOP 6 Results</h1></center>
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
                        <th>Total</th>
                    </tr>
        <?php
        
        while($res = $result->fetch_assoc()){
        $sum = $res['Sum'];
        $ave = 7;
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
                        <td><?php echo $res['sevenjudge'] ?></td>
                        <td><?php echo number_format((float)$average, 2, '.', '');  ?></td>
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




