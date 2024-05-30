<?php
session_start();
    include 'connect.php';
    $sql = "SELECT tblworkoutplan.workoutplantype, 
    tblexercise.exercisename, tblexercise.typeofexercise 
    FROM tblworkoutplan 
    INNER JOIN tblexercise ON tblworkoutplan.planid = tblexercise.planid
    WHERE tblexercise.intensitylevel = 'Beginner'";
    // WHERE tblexercise.intensitylevel = 'Beginner' AND tblexercise.isDeleted = 0"; dili ipakita kun flagged as 1

    $resultset = mysqli_query($connection, $sql);

    $sql1 = "SELECT * FROM tblexercise";
    // $sql1 = "SELECT * FROM tblexercise WHERE isDeleted = 0"; dili ipakita kun flagged as 1
    $resultset1 = mysqli_query($connection, $sql1);

    $sql2 = "SELECT tblworkoutplan.workoutplantype, 
    tblexercise.exercisename, tblexercise.intensitylevel
    FROM tblworkoutplan 
    INNER JOIN tblexercise ON tblworkoutplan.planid = tblexercise.planid
    WHERE tblexercise.typeofexercise = 'Endurance'";
    // WHERE tblexercise.typeofexercise = 'Endurance' AND tblexercise.isDeleted = 0"; dili ipakita kun flagged as 1

    $resultset2 = mysqli_query($connection, $sql2);

    $sql3 = "SELECT tblworkoutplan.workoutplantype, 
    tblexercise.exercisename, tblexercise.intensitylevel, tblexercise.typeofexercise
    FROM tblworkoutplan
    INNER JOIN tblexercise ON tblworkoutplan.planid = tblexercise.planid
    WHERE tblexercise.sets = 3 AND tblexercise.reps = 12";
    // WHERE tblexercise.sets = 3 AND tblexercise.reps = 12 AND tblexercise.isDeleted = 0"; dili ipakita kun flagged as 1

    $resultset3 = mysqli_query($connection, $sql3);
       
        $sqlTotalPlans = "SELECT COUNT(*) AS total_plans FROM tblworkoutplan";
        $resultTotalPlans = mysqli_query($connection, $sqlTotalPlans);
        $totalPlans = mysqli_fetch_assoc($resultTotalPlans)['total_plans'];
  
        $sqlPushPlans = "SELECT COUNT(*) AS push_plans FROM tblworkoutplan WHERE workoutplantype = 'push'";
        $resultPushPlans = mysqli_query($connection, $sqlPushPlans);
        $pushPlans = mysqli_fetch_assoc($resultPushPlans)['push_plans'];

        $sqlPullPlans = "SELECT COUNT(*) AS pull_plans FROM tblworkoutplan WHERE workoutplantype = 'pull'";
        $resultPullPlans = mysqli_query($connection, $sqlPullPlans);
        $pullPlans = mysqli_fetch_assoc($resultPullPlans)['pull_plans'];

        $sqlLegPlans = "SELECT COUNT(*) AS leg_plans FROM tblworkoutplan WHERE workoutplantype = 'leg'";
        $resultLegPlans = mysqli_query($connection, $sqlLegPlans);
        $legPlans = mysqli_fetch_assoc($resultLegPlans)['leg_plans'];

        $sqlAvgExercises = "SELECT FLOOR(AVG(num_exercises)) AS avg_exercises FROM (SELECT planid, COUNT(*) AS num_exercises FROM tblexercise GROUP BY planid) AS subquery";
        $resultAvgExercises = mysqli_query($connection, $sqlAvgExercises);
        $avgExercises = round(mysqli_fetch_assoc($resultAvgExercises)['avg_exercises'], 2);

        $sqlTotalReps = "SELECT SUM(sets * reps) AS total_reps FROM tblexercise";
        $resultTotalReps = mysqli_query($connection, $sqlTotalReps);
        $totalReps = mysqli_fetch_assoc($resultTotalReps)['total_reps'];

 
        $sqlEnduranceCount = "SELECT COUNT(*) AS endurance_count FROM tblexercise WHERE typeofexercise = 'Endurance'";
        $resultEnduranceCount = mysqli_query($connection, $sqlEnduranceCount);
        $enduranceCount = mysqli_fetch_assoc($resultEnduranceCount)['endurance_count'];

        $sqlStrengthCount = "SELECT COUNT(*) AS strength_count FROM tblexercise WHERE typeofexercise = 'Strength'";
        $resultStrengthCount = mysqli_query($connection, $sqlStrengthCount);
        $strengthCount = mysqli_fetch_assoc($resultStrengthCount)['strength_count'];

        $sqlFlexibilityCount = "SELECT COUNT(*) AS flexibility_count FROM tblexercise WHERE typeofexercise = 'Flexibility'";
        $resultFlexibilityCount = mysqli_query($connection, $sqlFlexibilityCount);
        $flexibilityCount = mysqli_fetch_assoc($resultFlexibilityCount)['flexibility_count'];

        $sqlBalanceCount = "SELECT COUNT(*) AS balance_count FROM tblexercise WHERE typeofexercise = 'Balance'";
        $resultBalanceCount = mysqli_query($connection, $sqlBalanceCount);
        $balanceCount = mysqli_fetch_assoc($resultBalanceCount)['balance_count'];   
        $mostCommonType = '';

        if ($enduranceCount >= $strengthCount && $enduranceCount >= $flexibilityCount && $enduranceCount >= $balanceCount) {
            $mostCommonType .= "Endurance";
        }
        
        if ($strengthCount >= $enduranceCount && $strengthCount >= $flexibilityCount && $strengthCount >= $balanceCount) {
            if (!empty($mostCommonType)) {
                $mostCommonType .= " & Strength";
            } else {
                $mostCommonType .= "Strength";
            }
        }
        
        if ($flexibilityCount >= $enduranceCount && $flexibilityCount >= $strengthCount && $flexibilityCount >= $balanceCount) {
            if (!empty($mostCommonType)) {
                $mostCommonType .= " & Flexibility";
            } else {
                $mostCommonType .= "Flexibility";
            }
        }
        
        if ($balanceCount >= $enduranceCount && $balanceCount >= $strengthCount && $balanceCount >= $flexibilityCount) {
            if (!empty($mostCommonType)) {
                $mostCommonType .= " & Balance";
            } else {
                $mostCommonType .= "Balance";
            }
        }
        $sqlBeginnerCount = "SELECT COUNT(*) AS beginner_count FROM tblexercise WHERE intensitylevel = 'Beginner'";
        $resultBeginnerCount = mysqli_query($connection, $sqlBeginnerCount);
        $beginnerCount = mysqli_fetch_assoc($resultBeginnerCount)['beginner_count'];
        
        $sqlModerateCount = "SELECT COUNT(*) AS moderate_count FROM tblexercise WHERE intensitylevel = 'Moderate'";
        $resultModerateCount = mysqli_query($connection, $sqlModerateCount);
        $moderateCount = mysqli_fetch_assoc($resultModerateCount)['moderate_count'];
        
        $sqlAdvancedCount = "SELECT COUNT(*) AS advanced_count FROM tblexercise WHERE intensitylevel = 'Advanced'";
        $resultAdvancedCount = mysqli_query($connection, $sqlAdvancedCount);
        $advancedCount = mysqli_fetch_assoc($resultAdvancedCount)['advanced_count'];
        
        $mostCommonIntensity = '';
        
        if ($beginnerCount >= $moderateCount && $beginnerCount >= $advancedCount) {
            $mostCommonIntensity .= "Beginner";
        }
        
        if ($moderateCount >= $beginnerCount && $moderateCount >= $advancedCount) {
            if (!empty($mostCommonIntensity)) {
                $mostCommonIntensity .= " & Moderate";
            } else {
                $mostCommonIntensity .= "Moderate";
            }
        }
        
        if ($advancedCount >= $beginnerCount && $advancedCount >= $moderateCount) {
            if (!empty($mostCommonIntensity)) {
                $mostCommonIntensity .= " & Advanced";
            } else {
                $mostCommonIntensity .= "Advanced";
            }
        }
        

   
?>
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,viewport-fit=cover">
    <title>OnlyFit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/reportStyle.css" rel="stylesheet">
    <link href="css/generalStyle.css" rel="stylesheet">

</head>
<body>
    <!-- <header>OnlyFit</header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container" style="font-size: 22px; font-weight: bold">
          <a class="navbar-brand" href="#">
            <img src="path_to_your_logo.png" alt="Logo">
          </a>
          
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="register.php#registrationForm">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php#LogCard">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutUs.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactUs.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Go Back Home</a>
            </li>
          </ul>
        </div>
    </nav> -->
    <header>
        <table class="table1">
          <tr>
            <td class="thTitle" colspan="7">OnlyFit</td>
            <th class="thData"><a class="nav-link" href="index.php">Home</a></th>
            <th class="thData"><a class="nav-link" href="register.php#registrationForm">Register</a></th>
            <th class="thData"><a class="nav-link" href="login.php#LogCard">Login</a></th>
            <th class="thData"><a class="nav-link" href="aboutUs.php">About Us</a></th>
            <th class="thData"><a class="nav-link" href="contactUs.php">Contact Us</a></th>
          </tr>
        </table>
      </header>
    <br>
    <br>
    <div>
    <table class="table2">
        <thead>
            <tr>
                <th class="th1" colspan="5" style="font-size: 30px; text-align:center;">List of Exercises</th>
            </tr>
            <tr style="font-size: 25px">
                <th class="th1" style="width: 15%">Exercise name</th>
                <th class="th1" style="width: 12%">Intensity</th>
                <th class="th1" style="width: 8%">Sets</th>
                <th class="th1" style="width: 8%">Reps</th>
                <th class="th1" style="width: 12%">Type</th>
           
            </tr>
        </thead>
        <tbody>
            <?php
                while($row1 = mysqli_fetch_assoc($resultset1)):
            ?>
            <tr>
                <td class="td1"><?php echo $row1['exercisename'] ?></td>
                <td class="td1"><?php echo $row1['intensitylevel'] ?></td>
                <td class="td1"><?php echo $row1['sets'] ?></td>
                <td class="td1"><?php echo $row1['reps'] ?></td>
                <td class="td1"><?php echo $row1['typeofexercise'] ?></td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
    </div>
    <div>
    </div>
    <div>
        <table class="table2">
            <thead>
                <tr>
                    <th class="th1" colspan="5" style="font-size: 30px; text-align:center;">Exercises with Beginner Intensity</th>
                </tr>
                <tr style="font-size: 25px">
                    <th class="th1" style="width:15%;">Workout Plan Type</th>
                    <th class="th1" style="width:20%;">Exercise Name</th>
                    <th class="th1" style="width:20%;">Type of Exercise</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $resultset->fetch_assoc()):
                ?>
                <tr>
                    <td class="td1"><?php echo $row['workoutplantype'] ?></td>
                    <td class="td1"><?php echo $row['exercisename'] ?></td>
                    <td class="td1"><?php echo $row['typeofexercise'] ?></td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
    <div>
        <table class="table2">
            <thead>
                <tr>
                    <th class="th1" colspan="5" style="font-size: 30px; text-align:center;">Exercises with Endurance Type</th>
                </tr>
                <tr style="font-size: 25px">
                    <th class="th1" style="width:15%;">Workout Plan Type</th>
                    <th class="th1" style="width:20%;">Exercise Name</th>
                    <th class="th1" style="width:20%;">Intensity Level</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $resultset2->fetch_assoc()):
                ?>
                <tr>
                    <td class="td1"><?php echo $row['workoutplantype'] ?></td>
                    <td class="td1"><?php echo $row['exercisename'] ?></td>
                    <td class="td1"><?php echo $row['intensitylevel'] ?></td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
    <div>
        <table class="table2">
            <thead>
                <tr>
                    <th class="th1" colspan="6" style="font-size: 30px; text-align:center;">Exercises with 3 Sets and 12 Reps</th>
                </tr>
                <tr style="font-size: 25px">
                    <th class="th1" style="width:15%;">Workout Plan Type</th>
                    <th class="th1" style="width:20%;">Exercise Name</th>
                    <th class="th1" style="width:20%;">Intensity Level</th>
                    <th class="th1" style="width:20%;">Type of Exercise</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $resultset3->fetch_assoc()):
                ?>
                <tr>
                    <td class="td1"><?php echo $row['workoutplantype'] ?></td>
                    <td class="td1"><?php echo $row['exercisename'] ?></td>
                    <td class="td1"><?php echo $row['intensitylevel'] ?></td>
                    <td class="td1"><?php echo $row['typeofexercise'] ?></td>
                    
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
    <!-- <div>
        <table class="table2">
            <thead>
                <tr>
                    <th class="th1" colspan="6" style="font-size: 30px; text-align:center;">Statistics</th>
                </tr>
                <tr style="font-size: 25px">
                    <th class="th1" style="width:15%;">Total number of Workout Plans</th>
                    <th class="th1" style="width:15%;"># of Push Workout Plan</th>
                    <th class="th1" style="width:15%;"># of Pull Workout Plan</th>
                    <th class="th1" style="width:15%;"># of Leg Workout Plan</th>
                    <th class="th1" style="width:15%;">Average Number of Exercises per Workout Plan </th>
                    <th class="th1" style="width:15%;">Total amount of Reps</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="td1"><?php echo $totalPlans ?></td>
                <td class="td1"><?php echo $pushPlans ?></td>
                <td class="td1"><?php echo $pullPlans ?></td>
                <td class="td1"><?php echo $legPlans ?></td>
                <td class="td1"><?php echo $avgExercises ?></td>
                <td class="td1"><?php echo $totalReps ?></td>
                </tr>
            </tbody>
        </table>
    </div> -->
    <hr>
    <div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-md-6">
            <div class="card p-4" id="LogCard">
                <h1 class="mb-4 text-center" style="font-size: 40px;">Statistics</h1>
                <hr>
                <p><b>Total number of Workout Plans:</b> <?php echo $totalPlans ?></p>
                <hr> 
                <p><b>No. of Push Workout Plans:</b> <?php echo $pushPlans ?></p>
                <hr> 
                <p><b>No. of Pull Workout Plans:</b> <?php echo $pullPlans ?></p>
                <hr> 
                <p><b>No. of Leg Workout Plans:</b> <?php echo $legPlans ?></p>
                <hr> 
                <p><b>Most commonly found type of exercise:</b> <?php echo $mostCommonType ?></p>
                <hr>
                <p><b>Most commonly found intensity:</b> <?php echo $mostCommonIntensity ?></p>
                <hr>
                <p><b>Average Number of Exercises per Workout Plan:</b> <?php echo $avgExercises ?></p>
                <hr>
                <p><b>Total amount of Reps:</b> <?php echo $totalReps ?></p>
            </div>
        </div>
    </div>  
</div>  
<hr>
<!-- <div class="statistics-chart">
    <h2 style="color: #000000; font-size: 40px; border-bottom: 2px solid #000000;">BAR CHART FOR WORKOUT PLANS</h2>
    <div class="chart">
        <div class="bar push" style="height: 690px; color: #000000;">Push: 69</div>
        <div class="bar pull" style="height: 420px; color: #000000;">Pull: 42</div>
        <div class="bar legs" style="height: 170px; color: #000000;">Legs: 17</div>
        <div class="bar calisthenics" style="height: 330px; color: #000000;">Calisthenics: 33</div>
        <div class="bar custom" style="height: 110px; color: #000000;">Custom Plans: 11</div>
    </div>
</div> -->
<img src="images\STATS.png" width="75%" height="75%" style="margin-left: 12.5%;" alt="samplepush">
<br>
<br>
<br>
<br>

    <footer>
        <p>Peter Sylvan L. Vecina | Kyle T. Vasquez</p>
        <p>Bachelor of Computer Science | Year 2</p>
    </footer>
 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
   
</body>