<?php
    include 'connect.php'
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,viewport-fit=cover">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/aboutUsStyle.css" rel="stylesheet">
  
    <script src="js/script.js"></script>
    <title>OnlyFit</title>
</head>
<body>
    <header>ONLYFIT</header>
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
              <a class="nav-link" href="login.php#LogCard">Log In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactUs.php">Contact Us</a>
            </li>
          </ul>
        </div>
    </nav>
    <div class="about-section">
        <h1><b>About Us Page</b></h1>
        <p>We are the CEO's of the OnlyFit App</p>
        <p>Feel free to know more about us!</p>
    </div>
    <br>
    <br>
    <div class="row">
  <div class="column">
    <div class="card">
    <div style="display: flex; justify-content: center; align-items: center;">
        <img src="images\kyleProfile.jpg" alt="Kyle" style="width:100%;">
    </div>
      <div class="container">
        <h2>Kyle Vasquez</h2>
        <p class="title">CEO & Founder</p>
        <p>A human being.</p>
        <p>kyleasdasd@gmail.com</p>
        <a href="contactUss.php">
            <p><button class="button">Contact</button></p>
        </a>
       
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <div style="display: flex; justify-content: center; align-items: center;">
        <img src="images\peterProfile.jpg" alt="Kyle" style="width: 100%;" >
    </div>
      <div class="container">
        <h2>Peter Sylvan Vecina</h2>
        <p class="title">CEO & Founder</p>
        <p>A human being.</p>
        <p>peterasdasd@example.com</p>
        <a href="contactUss.php">
            <p><button class="button">Contact</button></p>
        </a>
      </div>
    </div>
  </div>
  <footer>
      <p>Kyle T. Vasquez</p>
      <p>Bachelor of Computer Science | Year 2</p>
  </footer>



</body>
