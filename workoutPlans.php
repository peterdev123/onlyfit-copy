<?php
session_start();
    include 'connect.php';
    $sql = "SELECT * FROM tblworkoutplan";
    $resultset = mysqli_query($connection, $sql);
    $sql1 = "SELECT * FROM tblexercise";
    $resultset1 = mysqli_query($connection, $sql1);
   
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
                    <th colspan="4" style="font-size: 30px; text-align:center;">List of Workout Plans</th>
                </tr>
                <tr style="font-size: 25px">
                    <th style="width:10%;">Plan ID</th>
                    <th style="width:10%;">Workout Plan Type</th>
                    <th style="width:50%;">Workout Plan Description</th>
                    <th style="width:15%;">Edit/Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $resultset->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo $row['planid'] ?></td>
                    <td><?php echo $row['workoutplantype'] ?></td>
                    <td><?php echo $row['workoutplandescription'] ?></td>
                   
                    <?php
                   
                    $_SESSION['planid'] = $row['planid'];?>
                    <td>
                        <button style="display: inline; width: 100px;" onclick="window.location='updateworkoutplan.php';" class="btnPrimaryA" name="btnEdit">Edit</button>
                        <form method="post" style="display: inline;">
                        
                            <input type="hidden" name="planid" value="<?php echo $row['planid'] ?>">
                            <button type="submit" class="btnPrimaryA" name="btnDelete" style="width: 100px;">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
                    if(isset($_POST['btnDelete'])){
                        $planid = $_POST['planid'];
                        $deleteExerciseQuery = "DELETE FROM tblexercise WHERE planid = '$planid'";
                        mysqli_query($connection, $deleteExerciseQuery);
            
                        $sql = "DELETE FROM tblworkoutplan WHERE planid='$planid'";
                        if(mysqli_query($connection, $sql)){
                            echo "<script>window.location.href = 'workoutPlans.php'</script>";
                            exit();
                        } else {
                            echo "Error deleting record: " . mysqli_error($connection);
                        }
                    }
                ?>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
 
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
                <th style="width: 20%">Edit/Delete</th>
           
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
                <td>
                    <a href="updateExercise.php?exerciseID=<?php echo $row1['exerciseID']; ?>">Edit</a>
                    <form method="post" style="display: inline;">
                        <input type="hidden" name="deleteExerciseID" value="<?php echo $row1['exerciseID']; ?>">
                        <button type="submit" name="btnDeletee" style="width: 100px;">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>
    <?php
        if(isset($_POST['btnDeletee'])){
            if(isset($_POST['deleteExerciseID'])) {
                $deleteExerciseID = $_POST['deleteExerciseID'];
        
                $deleteSql = "DELETE FROM tblexercise WHERE exerciseID = '$deleteExerciseID'";
        
                $deleteResult = mysqli_query($connection, $deleteSql);
        
                if($deleteResult) {
                    echo "<script>window.location.href = 'workoutPlans.php'</script>";
                } 
                // else {
                //     echo "<script>alert('Error deleting exercise');</script>";
                // }
            } 
            // else {
            //     echo "<script>alert('Exercise ID not provided');</script>";
            // }
        }
    ?>
    </div>
    <footer>
        <p>Peter Sylvan L. Vecina | Kyle T. Vasquez</p>
        <p>Bachelor of Computer Science | Year 2</p>
    </footer>
 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
   
</body>