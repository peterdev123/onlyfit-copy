<?php
include 'connect.php';
$sql = "SELECT * FROM tblworkoutplan";
$resultset = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyFit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/plan.css" rel="stylesheet">
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
    <br>
    
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-4 custom-container" style="max-width: 900px; font-size: 19px;">
            <div class="text-center">
            <h1><b>PUSH DAY</b></h1>
        <p>"Push Day: It's time to target those upper body muscles with a high-intensity workout focused on pushing movements. Engage your chest, shoulders, and triceps as you press, lift, and push your way to strength and definition."</p>
        <p>The exercises in these will usually involve pushing movements using your chest, triceps, shoulders.</p>
        <p>Some examples would be:</p>
        <img src="images\pushPlan.jpg" width="75%" height="75%" alt="samplepush">
        
        <form action="" method="post">
            <input type="hidden" name="workoutdesciprtion" value="Push Day: It is time to target those upper body muscles with a high-intensity workout focused on pushing movements. Engage your chest, shoulders, and triceps as you press, lift, and push your way to strength and definition. The exercises in these will usually involve pushing movements using your chest, triceps, shoulders.">
            <input type="hidden" name="workouttype" value="push">
            <input type="hidden" name="isDelete" value="0">
            <button type="submit" name="btnRegister" class="btnPrimaryA">Create Push Workout Plan</button>
        </form>
      </div>

      </div>

          </div>
          <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>
        <p>Peter Sylvan L. Vecina | Kyle T. Vasquez</p>
        <p>Bachelor of Computer Science | Year 2</p>
    </footer>

    <?php
    if(isset($_POST['btnRegister'])){
        $workoutplandescription = mysqli_real_escape_string($connection, $_POST['workoutdesciprtion']);     
        $workoutplantype = mysqli_real_escape_string($connection, $_POST['workouttype']);
        $isDelete = 0;
        $sql = "INSERT INTO tblworkoutplan(workoutplandescription, workoutplantype, isDelete) VALUES(?, ?, ?)";
        $stmt = mysqli_prepare($connection, $sql);
        mysqli_stmt_bind_param($stmt, "ssi", $workoutplandescription, $workoutplantype, $isDelete);
        mysqli_stmt_execute($stmt);
        echo "<script>
              window.location.href = 'exercise.php'</script>";
              exit();
        mysqli_stmt_close($stmt);
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
