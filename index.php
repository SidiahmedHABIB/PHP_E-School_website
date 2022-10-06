<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-School</title>
    <!-- render all element normely -->
    <link rel="stylesheet" href="./assets/css/normalize.css">

    <!-- Fonts Awsome -->
    <link rel="stylesheet" href="./assets/css/all.min.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- main file css  -->
    <link rel="stylesheet" href="./assets/css/index-style.css">

</head>

<body>

    <!-- Start header  -->
    <header>
        <div class="container">
            <a href="#" class="logo">
                <img src="./assets/images/logo.png" alt="logo">
            </a>
            <nav>
                <i class="fas fa-bars toggle-menu"></i>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#aboute">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="./layout/login.php">Login</a></li>
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
                    Hello World! We Are E-School.
                </h2>
                <p>
                    Try the best courses of the week. </p>
            </div>
        </div>

    </div>
    <!-- End Landing -->

    <!-- Start About   -->
    <div class="aboute" id="aboute">
        <div class="container">
            <div class="main-heading">
                <h2>About</h2>
                <p>
                    We provide the best courses in the entire city, with excellent customer service </p>
            </div>
            <div class="img">
                <img src="./assets/images/about.png" alt="phone">
            </div>

        </div>

    </div>
    <!-- End About  -->

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
                    <img src="./assets/images/math.png" alt="">
                    <div class="caption">
                        <h4>Math</h4>
                        <p>Login</p>
                    </div>
                </div>
                <div class="box">
                    <img src="./assets/images/phys.png" alt="">
                    <div class="caption">
                        <h4>Physique</h4>
                        <p>Login</p>
                    </div>
                </div>
                <div class="box">
                    <img src="./assets/images/eng.png" alt="">
                    <div class="caption">
                        <h4>Engilsh</h4>
                        <p>Login</p>
                    </div>
                </div>
                <div class="box">
                    <img src="./assets/images/sc.png" alt="">
                    <div class="caption">
                        <h4>Science</h4>
                        <p>Login</p>
                    </div>
                </div>
                <div class="box">
                    <img src="./assets/images/fr.png" alt="">
                    <div class="caption">
                        <h4>Francais</h4>
                        <p>Login</p>
                    </div>
                </div>
                <div class="box">
                    <img src="./assets/images/history.png" alt="">
                    <div class="caption">
                        <h4>History</h4>
                        <p>Login</p>
                    </div>
                </div>
                <div class="box">
                    <img src="./assets/images/geo.png" alt="">
                    <div class="caption">
                        <h4>Geology</h4>
                        <p>Login</p>
                    </div>
                </div>
                <div class="box">
                    <img src="./assets/images/chimique.png" alt="">
                    <div class="caption">
                        <h4>Chimique</h4>
                        <p>Login</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->



    <!-- Start Video section  -->
    <div class="video" id="video">
        <video autoplay muted loop>
            <source src="./assets/images/video_background.mp4" type="video/mp4" />
        </video>
        <div class="text">
            <h2>Nothing that's worth anything is easy</h2>
            <p>Better is possible</p>
            <button>Join us</button>
        </div>
    </div>
    <!-- End Video section  -->

    <!-- Start Contact -->
    <div class="contact" id="contact">
        <div class="container">
            <div class="main-heading">
                <h2>Contact Us</h2>
                <p>
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.
                </p>
            </div>
            <div class="content">
                <form action="">
                    <input class="main-input" type="text" name="name" placeholder="Your Name" />
                    <input class="main-input" type="email" name="mail" placeholder="Your Email" />
                    <textarea class="main-input" name="message" placeholder="Your Message"></textarea>
                    <input type="submit" value="Send Message" />
                </form>
                <div class="info">
                    <img src="./assets/images/contact.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

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

</html>