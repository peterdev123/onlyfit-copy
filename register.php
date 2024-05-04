<?php
    include 'connect.php'
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,viewport-fit=cover">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/registerStylee.css" rel="stylesheet">
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

      
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-4 custom-container" style="max-width: 1000px; font-size: 19px;">
            <div class="text-center">
                <h1 class="mb-4">Registration Form</h1>
                <p id="inputError" class="inputErr"></p>
            </div>
            <form id="registrationForm" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Left side of the form -->
                        <div class="form-group"> <!-- for username -->
                            <label for="txtusername">Username:</label> 
                            <input type="text" class="form-control" id="txtusername" name="txtusername" placeholder="Enter username" required>
                        </div>
                        <div class="form-group"> <!-- for email -->
                            <label for="txtemail">Email:</label>
                            <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Enter email" required>
                        </div>
                        <div class="form-group"> <!-- for password -->
                            <label for="txtpassword">Password:</label>
                            <input type="password" class="form-control" id="txtpassword" name="txtpassword"minlength="8" placeholder="Enter password" required>
                        </div> 
                        <div class="form-group"> <!-- for firstname -->
                            <label for="txtfirstname">Firstname:</label>
                            <input type="text" class="form-control" id="txtfirstname" name="txtfirstname" placeholder="Enter firstname" required>
                        </div>
                        <div class="form-group"> <!-- for lastname -->
                            <label for="txtlastname">Lastname:</label>
                            <input type="text" class="form-control" id="txtlastname" name="txtlastname" placeholder="Enter lastname" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Right side of the form -->
                        <div class="form-group"> <!-- for gender -->
                            <label for="genderSelect">Gender:</label> 
                            <select class="form-control" id="genderSelect" name="genderSelect" required>
                                <option value="">Select gender</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                        <div class="form-group"> <!-- for birthdate -->
                            <label for="birthdate">Birthdate:</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                        </div>
                        <div class="form-group"> <!-- for weight -->
                            <label for="weight">Weight (kg):</label>
                            <input type="number" class="form-control" id="weight" name="weight" placeholder="Enter weight" required>
                        </div>
                        <div class="form-group"> <!-- for height -->
                            <label for="height">Height (cm):</label>
                            <input type="number" class="form-control" id="height" name="height" placeholder="Enter height" required>
                        </div>
                        <div class="form-group"> <!-- for usertype -->
                            <label for="userType">User Type:</label>
                            <select class="form-control" id="userType" name="userType" required>
                                <option value="">Select user type</option>
                                <option value="1">Trainer</option>
                                <option value="0">Trainee</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="text-center"> 
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="termsCheck" required>
                        <label for="termsCheck">I agree to the Terms of Service</label>
                    </div>
                    <button type="submit" name="btnRegister" class="btnPrimaryA">Register</button>
                </div>
            </form>
            <div class="mt-3 text-center">
                <p>Already have an account? <a href="login.php#LogCard">Log in</a></p>
            </div>
        </div>
    </div>

    <?php	 
    // if(isset($_POST['btnRegister'])){		
    //     //retrieve data from form and save the value to a variable
    //     //for tbluserprofile
    //     $fname=$_POST['txtfirstname'];		
    //     $lname=$_POST['txtlastname'];
    //     $gender=$_POST['genderSelect'];		
    //     $birthDate=$_POST['birthdate'];
    //     $weight=$_POST['weight'];		
    //     $height=$_POST['height'];
    //     $userType=$_POST['userType'];
        
    //     //for tbluseraccount
    //     $email=$_POST['txtemail'];		
    //     $uname=$_POST['txtusername'];
    //     $pword=$_POST['txtpassword'];
        
    //     //Check tbluseraccount if username or email is already existing
    //     $sql2 ="SELECT * FROM tbluseraccount WHERE username='".$uname."' OR emailadd='".$email."'";
    //     $result = mysqli_query($connection,$sql2);
    //     $row = mysqli_num_rows($result);
    //     if($row == 0){
    //         $sql ="INSERT INTO tbluseraccount(emailadd,username,password,usertype) VALUES('".$email."','".$uname."','".password_hash($pword, PASSWORD_DEFAULT)."','$userType')";
    //         mysqli_query($connection,$sql);
    //         //save data to tbluserprofile	
    //         $sql1 ="INSERT INTO tbluserprofile(firstname,lastname,birthdate,gender,height,weight) VALUES('".$fname."','".$lname."','$birthDate','".$gender."','$height','$weight')";
    //         mysqli_query($connection,$sql1);
    //         echo "<script>showPopupMessage1('You are now registered.');</script>";
    //         exit();
    //     }else{
    //         $row1 = mysqli_fetch_assoc($result);
    //         if ($row1['username'] == $uname) {
    //             echo "<script>showMessage('Username is already taken.');</script>";
    //         }
    
    //         if ($row1['emailadd'] == $email) {
    //             echo "<script>showMessage('Email already exists.');</script>";
    //         }
    //         exit();
    //     }
    // }   
    if(isset($_POST['btnRegister'])){		
        // Retrieve data from form and save the value to a variable
        // For tbluserprofile
        $fname = $_POST['txtfirstname'];		
        $lname = $_POST['txtlastname'];
        $gender = $_POST['genderSelect'];		
        $birthDate = $_POST['birthdate'];
        $weight = $_POST['weight'];		
        $height = $_POST['height'];
        $userType = $_POST['userType'];
        
        // For tbluseraccount
        $email = $_POST['txtemail'];		
        $uname = $_POST['txtusername'];
        $pword = $_POST['txtpassword'];
        
        // Check tbluseraccount if username or email is already existing
        $sql2 = "SELECT * FROM tbluseraccount WHERE username='".$uname."' OR emailadd='".$email."'";
        $result = mysqli_query($connection, $sql2);
        $row = mysqli_num_rows($result);
        
        if($row == 0){
            // Check if the password is unique
            $sql3 = "SELECT * FROM tbluseraccount WHERE password='".password_hash($pword, PASSWORD_DEFAULT)."'";
            $result2 = mysqli_query($connection, $sql3);
            $row2 = mysqli_num_rows($result2);
            
            if($row2 == 0){
                $sql = "INSERT INTO tbluseraccount(emailadd, username, password, usertype) VALUES('".$email."','".$uname."','".password_hash($pword, PASSWORD_DEFAULT)."','$userType')";
                mysqli_query($connection, $sql);
                // Save data to tbluserprofile	
                $sql1 = "INSERT INTO tbluserprofile(firstname, lastname, birthdate, gender, height, weight) VALUES('".$fname."','".$lname."','$birthDate','".$gender."','$height','$weight')";
                mysqli_query($connection, $sql1);
                echo "<script>showPopupMessage1('You are now registered.');</script>";
                exit();
            } else {
                echo "<script>showMessage('Password is already taken.');</script>";
                exit();
            }
        } else {
            $row1 = mysqli_fetch_assoc($result);
            if ($row1['username'] == $uname) {
                echo "<script>showMessage('Username is already taken.');</script>";
            }
    
            if ($row1['emailadd'] == $email) {
                echo "<script>showMessage('Email already exists.');</script>";
            }
            exit();
        }
    }    
    ?>
    
    <footer>
        <p>Peter Sylvan L. Vecina</p>
        <p>Bachelor of Computer Science | Year 2</p>
    </footer>

</body>

