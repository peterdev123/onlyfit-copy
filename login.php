<?php
    include 'connect.php'
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,viewport-fit=cover">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/loginStyle.css" rel="stylesheet">
    <link href="css/loginMessage.css" rel="stylesheet">
    <link href="css/generalStyle.css" rel="stylesheet">
    <script src="js/script.js"></script>
    <title>OnlyFit</title>
</head>
<body>
    <!-- <header>ONLYFIT</header>
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
              <a class="nav-link" href="aboutUs.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactUs.php">Contact Us</a>
            </li>
          </ul>
        </div>
    </nav> -->
    <header>
        <table class="table1">
          <tr">
            <td class="thTitle" colspan="7">OnlyFit</td>
            <th class="thData"><a class="nav-link" href="index.php">Home</a></th>
            <th class="thData"><a class="nav-link" href="register.php#registrationForm">Register</a></th>
            <th class="thData"><a class="nav-link" href="aboutUs.php">About Us</a></th>
            <th class="thData"><a class="nav-link" href="contactUs.php">Contact Us</a></th>
          </tr>
        </table>
    </header>

    <div class="container">
      <div class="row justify-content-center align-items-center" style="height: 100vh;">
          <div class="col-md-6">
              <div class="card p-4" id="LogCard">
                  <h1 class="mb-4 text-center" style="font-size: 40px;">Log in</h1>
                  <p id="inputError" class="inputErr"></p>
                  <form method="post">
                      <div class="mb-3">
                          <label for="username" class="form-label">Username:</label>
                          <input type="text" class="form-control" id="username" name="txtusername" required>
                      </div>
                      <div class="mb-3">
                          <label for="password" class="form-label">Password:</label>
                          <input type="password" class="form-control" id="password" name="txtpassword" required>
                      </div>
                      <div class="mb-3">
                          <a href="forgot_password.php" class="forgot-password-link" style="color:#031620;">Forgot Password?</a>
                      </div>
                      <div class="text-center">
                          <button type="submit" class="btnPrimaryA" name="btnLogin">Login</button>
                      </div>
                  </form>
                  <div class="mt-3 text-center">
                      <p>Don't have an account yet? <a style="color:#031620;" href="register.php#registrationForm" class ="redirect-register">Register here</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <footer>
      <p>Peter Sylvan L. Vecina</p>
      <p>Bachelor of Computer Science | Year 2</p>
  </footer>

  <?php
    // session_start();
    // $login = false;

    // if(isset($_POST['btnLogin'])){
    //   $username = $_POST['txtusername'];
    //   $password = $_POST['txtpassword'];

    //   $sql = "SELECT password FROM tbluseraccount WHERE username = '$username'";
    //   $result = mysqli_query($connection, $sql);
    //   $row = mysqli_num_rows($result);

    //   if (!$row) {
    //     echo "<script>showMessage('Incorrect username.');</script>";
    //     exit();
    //   }

    //   $row = mysqli_fetch_assoc($result);
    //   $hashedPasswordFromDatabase = $row['password'];

    //   // echo password_verify($password, $hashedPasswordFromDatabase) ? 'Password is correct' : 'Password is incorrect';

    //   // if (!password_verify($password, $hashedPasswordFromDatabase)) {
    //   //   echo "<script>showMessage('Incorrect password.');</script>";
    //   //   exit();
    //   // }

    //   // echo "<script>showPopupMessage('You are logged in.');</script>";

    //   $_SESSION['username'] = $username;
    //   $_SESSION['loggedin'] = true;
    //   // header("Location: welcom.php");
    //   // exit();
    // }

    if(isset($_POST['btnLogin'])){
      $username = $_POST['txtusername'];
      $password = $_POST['txtpassword'];
  
      $sqlQuery = mysqli_query($connection,
          "SELECT password FROM tbluseraccount WHERE username='".$username."'");
      $row = mysqli_num_rows($sqlQuery);
      if($row) {
          $row = mysqli_fetch_assoc($sqlQuery);
          if(password_verify($password, $row['password'])) {
              echo "<script>
              window.location.href = 'workoutPlans.php'</script>";
              exit();
          }else{
              echo "<script>showMessage('Incorrect password.');</script>";
          }
      }else{
          echo "<script>showMessage('Incorrect username.');</script>";
      }
    }
  ?>

</body>
