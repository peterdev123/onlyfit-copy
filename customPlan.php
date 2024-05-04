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
    <link href="css/customPlanStyle.css" rel="stylesheet">
    <script src="js/script.js"></script>
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
    </nav>
    <br>
    <br>
    <br>
    
    <form method="post">
        <table>
            <tr>
                <th colspan="2" style="text-align: center; font-size: 35px;">Custom Workout Plan</th>
            </tr>
            <tr>
                <td>Workout Type: </td>
                <td><input type="text" class="form-control" id="workouttype" name="workouttype" placeholder="Enter workout type" required></td>
            </tr>
            <tr>
                <td>Workout Description </td>
                <td><textarea rows="4" cols="50" class="form-control" id="workoutdescription" name="workoutdescription"  placeholder="Enter workout description" required></textarea></td>
            </tr>
            
            <tr>
                <td colspan = "2"style="border-right: none; border-bottom: none;"><button type="submit" name="btnSubmit">Submit</button></td>
            </tr>
        </table>
    </form>
    <footer>
        <p>Peter Sylvan L. Vecina | Kyle T. Vasquez</p>
        <p>Bachelor of Computer Science | Year 2</p>
    </footer>

    <?php

if(isset($_POST['btnSubmit'])){
    $workoutplantype = mysqli_real_escape_string($connection, $_POST['workouttype']);
    $workoutplandescription = mysqli_real_escape_string($connection, $_POST['workoutdescription']);
    
    $sql = "INSERT INTO tblworkoutplan(workoutplandescription, workoutplantype) VALUES (?, ?)";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $workoutplandescription, $workoutplantype);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    echo "<script>window.location.href = 'exercise.php'</script>";
    exit();
}
?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
