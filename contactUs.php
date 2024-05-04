<?php
    include 'connect.php'
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,viewport-fit=cover">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="css/contactUsStylee.css" rel="stylesheet">
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
              <a class="nav-link" href="login.php#logInForm">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutUs.php">About Us</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="otherbody">
<div class = "container2">
  <form action="#" class="form">
    <h2 style="font-weight: bold;">CONTACT US</h2>
    <div class="input">
      <input type="text" autocomplete="off" name = "name" required>
      <label for="name">Name</label>
 
    </div>
    <div class="input">
      <input type="text" autocomplete="off" name = "email" required>
      <label for="name">Email</label>
 
    </div>
    <div class="input">
      <textarea name="message" cols="30" rows="1"></textarea>
      <label for="message">Message</label>
 
    </div>
    <button>Send Message</button>
  </form>
  <div class="contact">
    <ul>
      <li><i class="gg-phone"></i><a href="#">1234567</a></li>
      <li><i class="gg-facebook"></i><a href="#">icancarry793poundsFB</a></li>
      <li><i class="gg-mail"></i><a href="#">bench100kg@gmail.com</a></li>
    </ul>
  </div>
</div>
</div>

  <footer>
      <p>Kyle T. Vasquez</p>
      <p>Bachelor of Computer Science | Year 2</p>
  </footer>

  

</body>
