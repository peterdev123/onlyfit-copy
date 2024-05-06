<?php
session_start();
    include 'connect.php';
    $sql = "SELECT tblexercise.exerciseID, tblexercise.planid, tblworkoutplan.workoutplantype, tblexercise.exercisename, tblexercise.typeofexercise 
    FROM tblworkoutplan 
    INNER JOIN tblexercise ON tblworkoutplan.planid = tblexercise.planid
    WHERE tblexercise.intensitylevel = 'Beginner'";

    $resultset = mysqli_query($connection, $sql);

    $sql1 = "SELECT * FROM tblexercise";
    
    $resultset1 = mysqli_query($connection, $sql1);

    $sql2 = "SELECT tblexercise.exerciseID, tblexercise.planid, tblworkoutplan.workoutplantype, tblexercise.exercisename, tblexercise.intensitylevel
    FROM tblworkoutplan 
    INNER JOIN tblexercise ON tblworkoutplan.planid = tblexercise.planid
    WHERE tblexercise.typeofexercise = 'Endurance'";

    $resultset2 = mysqli_query($connection, $sql2);

    $sql3 = "SELECT tblexercise.exerciseID, tblexercise.planid, tblworkoutplan.workoutplantype, tblexercise.exercisename, tblexercise.intensitylevel
    FROM tblworkoutplan 
    INNER JOIN tblexercise ON tblworkoutplan.planid = tblexercise.planid
    WHERE tblexercise.typeofexercise = 'Endurance'";

    $resultset3 = mysqli_query($connection, $sql2);
   
?>
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,viewport-fit=cover">
    <title>OnlyFit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/workoutPlann.css" rel="stylesheet">
</head>
<body>
    <header>OnlyFit</header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container" style="font-size: 22px; font-weight: bold">
          <a class="navbar-brand" href="#">
            <img src="path_to_your_logo.png" alt="Logo">
          </a>
         
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
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
           
          </ul>
        </div>
      </nav>
    <br>
    <br>
    <div>
    <table>
        <thead>
            <tr>
                <th colspan="8" style="font-size: 30px; text-align:center;">List of Exercises</th>
            </tr>
            <tr style="font-size: 25px">
                <th style="width: 8%">ID</th>
                <th style="width: 8%">Plan ID</th>
                <th style="width: 15%">Exercise name</th>
                <th style="width: 12%">Intensity</th>
                <th style="width: 8%">Sets</th>
                <th style="width: 8%">Reps</th>
                <th style="width: 12%">Type</th>
           
            </tr>
        </thead>
        <tbody>
            <?php
                while($row1 = mysqli_fetch_assoc($resultset1)):
            ?>
            <tr>
                <td><?php echo $row1['exerciseID'] ?></td>
                <td><?php echo $row1['planid'] ?></td>
                <td><?php echo $row1['exercisename'] ?></td>
                <td><?php echo $row1['intensitylevel'] ?></td>
                <td><?php echo $row1['sets'] ?></td>
                <td><?php echo $row1['reps'] ?></td>
                <td><?php echo $row1['typeofexercise'] ?></td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th colspan="5" style="font-size: 30px; text-align:center;">Exercises with Beginner Intensity</th>
                </tr>
                <tr style="font-size: 25px">
                    <th style="width:10%;">ID</th>
                    <th style="width:10%;">Plan ID</th>
                    <th style="width:15%;">Workout Plan Type</th>
                    <th style="width:20%;">Exercise Name</th>
                    <th style="width:20%;">Type of Exercise</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $resultset->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo $row['exerciseID'] ?></td>
                    <td><?php echo $row['planid'] ?></td>
                    <td><?php echo $row['workoutplantype'] ?></td>
                    <td><?php echo $row['exercisename'] ?></td>
                    <td><?php echo $row['typeofexercise'] ?></td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th colspan="5" style="font-size: 30px; text-align:center;">Exercises with Endurance Type</th>
                </tr>
                <tr style="font-size: 25px">
                    <th style="width:10%;">ID</th>
                    <th style="width:10%;">Plan ID</th>
                    <th style="width:15%;">Workout Plan Type</th>
                    <th style="width:20%;">Exercise Name</th>
                    <th style="width:20%;">Intensity Level</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $resultset2->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo $row['exerciseID'] ?></td>
                    <td><?php echo $row['planid'] ?></td>
                    <td><?php echo $row['workoutplantype'] ?></td>
                    <td><?php echo $row['exercisename'] ?></td>
                    <td><?php echo $row['intensitylevel'] ?></td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th colspan="5" style="font-size: 30px; text-align:center;">Exercises with Beginner Intensity</th>
                </tr>
                <tr style="font-size: 25px">
                    <th style="width:10%;">ID</th>
                    <th style="width:10%;">Plan ID</th>
                    <th style="width:15%;">Workout Plan Type</th>
                    <th style="width:20%;">Exercise Name</th>
                    <th style="width:20%;">Type of Exercise</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $resultset3->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo $row['exerciseID'] ?></td>
                    <td><?php echo $row['planid'] ?></td>
                    <td><?php echo $row['workoutplantype'] ?></td>
                    <td><?php echo $row['exercisename'] ?></td>
                    <td><?php echo $row['intensitylevel'] ?></td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
    <footer>
        <p>Peter Sylvan L. Vecina | Kyle T. Vasquez</p>
        <p>Bachelor of Computer Science | Year 2</p>
    </footer>
 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
   
</body>