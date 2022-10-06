<?php
include '../backend/database.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/login-style.css">

    <title>Register Form</title>
</head>

<body>
    <!-- Start header  -->
    <header>
        <div class="container">
            <a href="../index.php" class="logo">
                <img src="../assets/images/logo.png" alt="logo">
            </a>

        </div>
    </header>
    <!-- End header  -->

    <!-- Start form  -->
    <div class="form">
        <div class="container">
            <form action="" method="POST">
                <h3>Register Here</h3>

                <input type="text" placeholder="Username" name="username">
                <input type="email" placeholder="Email" name="email">


                <input type="password" placeholder="Password" name="password">


                <input type="password" placeholder="Confirm Password" name="passwordc">

                <button name="signup">Register</button>

                <p class="login-register-text">Have an account ? <a href="login.php">Login Here</a></p>
            </form>
        </div>
    </div>
    <!-- End form  -->

    <!-- Start footer -->
    <div class="footer">
        <div class="container">
            <h1>E-School</h1>
            <p>We Are Social</p>
            <div class="social-icons">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-linkedin"></i>
            </div>
            <p class="copyright">&copy; 2022 <span>Sidi Ahamed Habib</span> All Right Reserved</p>
        </div>
    </div>
    <!-- End footer -->
</body>