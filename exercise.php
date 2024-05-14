
<?php
    include 'connect.php';
    $sql = "SELECT * FROM tblworkoutplan ORDER BY planid DESC LIMIT 1";
    $resultset = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($resultset);
    $planid = $row['planid'];
    $sql1 = "SELECT * FROM tblexercise WHERE planid = $planid";
    $resultset1 = mysqli_query($connection, $sql1);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,viewport-fit=cover">
    <title>OnlyFit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/exerciseStyle.css" rel="stylesheet">
    <link href="css/generalStyle.css" rel="stylesheet">

    <script src="js/script.js"></script>
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
    <form method="post">
    <input type="hidden" name="isDeleted" value="0">    
        <table class="table2">
            <tr>
                 <input type="hidden" name="isDeleted" value="0">
                <th class="th1" colspan="2" style="text-align: center; font-size: 35px;">Exercise</th>
            </tr>
            <tr>
                <td class="td1">Exercise name: </td>
                <td class="td1"><input type="text" class="form-control" id="exercise" name="exercise" placeholder="Enter exercise name" required></td>
            </tr>
            <tr>
                <td class="td1">Intensity Level: </td>
                <td class="td1"><select class="form-control" id="intensity" name="intensity" required>
                        <option value="">Select Intensity Level</option>
                        <option value="Beginner">Beginner</option>
                        <option value="Moderate">Moderate</option>
                        <option value="Advanced">Advanced</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="td1">Sets: </td>
                <td class="td1"><input type="number" class="form-control" id="sets" name="sets" placeholder="Enter no. of sets" required></td>
            </tr>
            <tr>
                <td class="td1">Reps: </td>
                <td class="td1"><input type="number" class="form-control" id="reps" name="reps" placeholder="Enter no. of reps" required></td>
            </tr>
            <tr>
                <td class="td1">Type of Exercise: </td>
                <td class="td1"><select class="form-control" id="typeExercise" name="typeExercise" required>
                        <option value="">Select type of exercise</option>
                        <option value="Endurance">Endurance</option>
                        <option value="Strength">Strength</option>
                        <option value="Balance">Balance</option>
                        <option value="Flexibility">Flexibility</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="td1" colspan="2"><button type="submit" name="btnSave">Save Exercise & Add Another</button></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['btnSave'])){		
        // Retrieve data from form and save the value to a variable
        // For tblexercise
        $ename = $_POST['exercise'];		
        $intensity = $_POST['intensity'];
        $sets = $_POST['sets'];		
        $reps = $_POST['reps'];
        $type = $_POST['typeExercise'];
        $isDeleted = 0;
        $sql = "INSERT INTO tblexercise(planid, exercisename, intensitylevel, sets, reps, typeofexercise, isDeleted) VALUES('$planid', '".$ename."', '".$intensity."', '$sets', '$reps', '".$type."', $isDeleted)";
        mysqli_query($connection, $sql);

        echo "<script>
                  window.location.href = 'exercise.php'</script>";
                  exit();
    }    
    ?>
    <br>
    <br>
    <br>
    <div>
        <form method="post">
            <table class="table2">
                <thead>
                    <tr>
                        <th class="th1">ID</th>
                        <th class="th1">Exercise name</th>
                        <th class="th1">Intensity</th>
                        <th class="th1">Sets</th>
                        <th class="th1">Reps</th>
                        <th class="th1">Type</th>
                        <th class="th1">Delete?</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row1 = mysqli_fetch_assoc($resultset1)):
                    ?>
                    <tr>
                        <td class="th1"><?php echo $row1['exerciseID'] ?></td>
                        <td class="th1"><?php echo $row1['exercisename'] ?></td>
                        <td class="th1"><?php echo $row1['intensitylevel'] ?></td>
                        <td class="th1"><?php echo $row1['sets'] ?></td>
                        <td class="th1"><?php echo $row1['reps'] ?></td>
                        <td class="th1"><?php echo $row1['typeofexercise'] ?></td>
                        <td class="th1">
                            <form method="post" style="display: inline;">
                                <input type="hidden" name="deleteExerciseID" value="<?php echo $row1['exerciseID']; ?>">
                                <button type="submit" name="btnDelete" style="width: 116px;">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile;?>
                    <tr>
                        <td class="th1" colspan="7"><button type="submit" name="btnSubmit">Save All</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

    <?php
        if(isset($_POST['btnSubmit'])) {
            echo "<script>showPopupMessage2('List of exercises saved');</script>";
        }

        if(isset($_POST['btnDelete'])) {
            if(isset($_POST['deleteExerciseID'])) {
                $deleteExerciseID = $_POST['deleteExerciseID'];
        
                $deleteSql = "DELETE FROM tblexercise WHERE exerciseID = '$deleteExerciseID'";
        
                $deleteResult = mysqli_query($connection, $deleteSql);
        
                if($deleteResult) {
                    echo "<script>window.location.href = 'exercise.php'</script>";
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
