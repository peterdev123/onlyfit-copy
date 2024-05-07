
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
    <link href="css/workoutPlanStyle.css" rel="stylesheet">
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
      <table>
            <tr>
                <th colspan="2" style="text-align: center; font-size: 30px;">Select Workout Plans</th>
            </tr>
            <tr>
                <td style="width: 50%;"><a href="pushPlan.php" class="button">Push Workout Plan</a></td>
                <td><a href="pullPlan.php" class="button">Pull Workout Plan</a></td>
            </tr>
            <tr>
                <td> <a href="legPlan.php" class="button">Leg Workout Plan</a></td>
                <td><a href="calisthenicsPlan.php" class="button">Calisthenics Workout Plan</a></td>
            </tr>
            <tr>
                <td colspan="2"><a href="customPlan.php" class="button">Make Custom Workout Plan</a></td>
                
            </tr>
            
        </table>
        
      <!-- <div class="center">
          
      </div>
        <div class="center">
          
      </div>
      <div class="center">
         
      </div> -->
      
    <footer>
        <p>Peter Sylvan L. Vecina | Kyle T. Vasquez</p>
        <p>Bachelor of Computer Science | Year 2</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</body>