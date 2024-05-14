<?php
    session_start();
    include 'connect.php';
    $sql = "SELECT username FROM tbluseraccount";
    $resultset = mysqli_query($connection, $sql);

    $sql1 = "SELECT * FROM tbluserprofile";
    $resultset1 = mysqli_query($connection, $sql);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,viewport-fit=cover">
    <title>OnlyFit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/profileStyle.css" rel="stylesheet">
    <link href="css/generalStyle.css" rel="stylesheet">
</head>
<body>
    <header>
        <table style="margin-right: 50px">
            <tr">
            <td class="thTitle" colspan="9" style="color: #000; width:50%;">OnlyFit</td>
            <th class="thData" style="color: #000;"><a class="nav-link" href="register.php#registrationForm">Register</a></th>
            <th class="thData" style="color: #000;"><a class="nav-link" href="login.php#LogCard">Login</a></th>
            <th class="thData" style="color: #000;"><a class="nav-link" href="aboutUs.php">About Us</a></th>
            <th class="thData" style="color: #000;"><a class="nav-link" href="contactUs.php">Contact Us</a></th>
            <th class="thData" style="color: #000;"><a class="nav-link" href="workoutPlans.php">Workout Plans</a></th>
            </tr>
        </table>
    </header>

    <div class="padding">
        <div class="col-md-8">
            <!-- Column -->
            <div class="card"> <img class="card-img-top" src="https://img.freepik.com/free-photo/young-adult-doing-indoor-sport-gym_23-2149205532.jpg?t=st=1715517761~exp=1715521361~hmac=b929bc1d1389290345a746614ecb4b1eb0afb4fe974d788e85f7eceb58db8262&w=1380" alt="Card image cap">
                <div class="card-body little-profile text-center">
                    <div class="pro-img"><img src="https://i.imgur.com/8RKXAIV.jpg" alt="user"></div>
                    <h3 class="m-b-0">Brad Macullam</h3>
                    <p>Web Designer &amp; Developer</p> <a href="javascript:void(0)" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded" data-abc="true">Follow</a>
                    <div class="row text-center m-t-20">
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">10434</h3><small>Articles</small>
                        </div>
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">434K</h3><small>Followers</small>
                        </div>
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">5454</h3><small>Following</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>