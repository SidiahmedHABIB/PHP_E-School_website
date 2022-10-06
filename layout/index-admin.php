<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- render all element normely -->
    <link rel="stylesheet" href="../assets/css/normalize.css">

    <!-- Fonts Awsome -->
    <link rel="stylesheet" href="../assets/css/all.min.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- main file css  -->
    <link rel="stylesheet" href="../assets/css/index-style.css">

</head>

<body>

    <!-- Start header  -->
    <header>
        <div class="container">
            <a href="index-admin.php" class="logo">
                <img src="../assets/images/logo.png" alt="logo">
            </a>
            <nav>
                <i class="fas fa-bars toggle-menu"></i>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="game.php">game</a></li>
                    <li><a href="page-prof.php">adimn</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>

            </nav>
        </div>
    </header>
    <!-- End header  -->

    <!-- Start Landing -->
    <div class="landing">
        <div class="overlay"></div>
        <div class="text">
            <div class="content">
                <h2>
                    Welecom Admin
                </h2>
            </div>
        </div>

    </div>
    <!-- End Landing -->


    <!-- Start Services -->
    <div class="services" id="services">
        <div class="container">
            <div class="main-heading">
                <h2>Services</h2>
                <p>
                    Our amazing courses
                </p>
            </div>
            <div class="imgs-container">
                <div class="box">
                    <img src="../assets/images/math.png" alt="">
                    <div class="caption">
                        <a href="math.php">
                            <h4>Math</h4>
                        </a>
                        <p>E-School</p>
                    </div>
                </div>
                <div class="box">
                    <img src="../assets/images/phys.png" alt="">
                    <div class="caption">
                        <a href="">
                            <h4>Physique</h4>
                        </a>
                        <p>E-School</p>
                    </div>
                </div>
                <div class="box">
                    <img src="../assets/images/eng.png" alt="">
                    <div class="caption">
                        <a href="">
                            <h4>Engilsh</h4>
                        </a>
                        <p>E-School</p>
                    </div>
                </div>
                <div class="box">
                    <img src="../assets/images/sc.png" alt="">
                    <div class="caption">
                        <a href="">
                            <h4>Science</h4>
                        </a>
                        <p>E-School</p>
                    </div>
                </div>
                <div class="box">
                    <img src="../assets/images/fr.png" alt="">
                    <div class="caption">
                        <a href="">
                            <h4>Francais</h4>
                        </a>
                        <p>E-School</p>
                    </div>
                </div>
                <div class="box">
                    <img src="../assets/images/history.png" alt="">
                    <div class="caption">
                        <a href="">
                            <h4>History</h4>
                        </a>
                        <p>E-School</p>
                    </div>
                </div>
                <div class="box">
                    <img src="../assets/images/geo.png" alt="">
                    <div class="caption">
                        <a href="">
                            <h4>Geology</h4>
                        </a>
                        <p>E-School</p>
                    </div>
                </div>
                <div class="box">
                    <img src="../assets/images/chimique.png" alt="">
                    <div class="caption">
                        <a href="">
                            <h4>Chimique</h4>
                        </a>
                        <p>E-School</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->



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
            <p class="copyright">&copy; 2021 <span>Sidi Ahamed Habib</span> All Right Reserved</p>
        </div>
    </div>
    <!-- End footer -->



</body>

</html>