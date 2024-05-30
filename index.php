
<?php
    include 'connect.php';
    $sql = "SELECT * FROM tbluserprofile";
    $resultset = mysqli_query($connection, $sql);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,viewport-fit=cover">
    <title>OnlyFit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/indexStyle.css" rel="stylesheet">
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
              <a class="nav-link" href="workoutPlans.php">Workout Plans</a>
            </li>
          </ul>
        </div>
      </nav> -->
      <header>
        <table style="margin-right: 50px">
          <tr">
            <td class="thTitle" colspan="7">OnlyFit</td>
            <th class="thData"><a class="nav-link" href="register.php#registrationForm">Register</a></th>
            <th class="thData"><a class="nav-link" href="login.php#LogCard">Login</a></th>
            <th class="thData"><a class="nav-link" href="aboutUs.php">About Us</a></th>
            <th class="thData"><a class="nav-link" href="contactUs.php">Contact Us</a></th>
            <th class="thData"><a class="nav-link" href="workoutPlans.php">Workout Plans</a></th>
            <th class="thData"><a class="nav-link" href="report.php">Reports</a></th>
          </tr>
        </table>
      </header>
      <section class="hero">
        <div class="container">
            <div class="hero-content">
                <img src="images\indexStartingImage.avif" alt="Fitness Image" width="800" height="500">
                <div class="hero-text">
                    <h1>WELCOME TO ONLYFIT</h1>
                    <p>Your ultimate fitness destination</p>
                    <p>Start your journey to a healthier lifestyle today!</p>
                    <br>
                    <a href="workoutPlan.php" class="button">Make Workout Plan</a>
                </div>
            </div>
        </div>
      </section>
      <!-- <br>
      <br>
      <h1 class="hOne">READ REPORTS</h1>
      <a href="report.php" class="button" style="margin: 45%;" >Dashboard</a>
      <br>
      <br>
      <br>
      <br> -->
    <footer>
        <p>Peter Sylvan L. Vecina | Kyle T. Vasquez</p>
        <p>Bachelor of Computer Science | Year 2</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</body>
