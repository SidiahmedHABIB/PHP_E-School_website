<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-School</title>
    <!-- render all element normely -->
    <link rel="stylesheet" href="../assets/css/normalize.css">

    <!-- Fonts Awsome -->
    <link rel="stylesheet" href="../assets/css/all.min.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- main file css  -->
    <link rel="stylesheet" href="../assets/css/cours.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <script>
        function x(file, id, dv) {
            if (id == 0) {
                document.getElementById(dv).innerHTML = "<img src='../assets/images/" + file + "'  style='width:auto;height: 400px;'>";;
            } else if (id == 1) {
                document.getElementById(dv).innerHTML = "<video controls style='width:auto; height: 400px;'><source src='../assets/images/" + file + "' type='video/mp4'></video>";
            }
        }
    </script>



</head>

<body>

    <!-- Start header  -->
    <header>
        <div class="container">
            <a href="math.php" class="logo">
                <img src="../assets/images/logo.png" alt="logo">
            </a>
            <nav>
                <i class="fas fa-bars toggle-menu"></i>
                <ul>
                    <li><a href="#cour">Cours</a></li>

                    <li><a href="logout.php">Logout</a></li>
                </ul>

            </nav>
        </div>
    </header>
    <!-- End header  -->
    <style>
        .landing {
            min-height: 100vh;
            background-color: #1f2021;
            background-image: url("../assets/images/math.png");
            background-size: cover;
        }
    </style>

    <!-- Start Landing -->
    <div class="landing">
        <div class="overlay"></div>


    </div>
    <!-- End Landing -->
    <?php
    $host = "localhost";
    $user = "root";
    $psw = "";
    $db = "projet_federe";
    $conn = mysqli_connect($host, $user, $psw, $db);
    $r = mysqli_query($conn, "select * from courses");

    ?>

    <style>

    </style>

    <!-- Start cours  -->
    <div class="cours" id="cour">
        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $i = 0;
                        $count = 0;
                        while ($row = mysqli_fetch_array($r)) {
                            if ($count == 0) {
                                echo "<div class=\"item mb-4\">";
                                echo "<div class=\"card border-0 shadow\">";
                                echo "<div id='" . $i . "'>";
                                echo "<img src=\"../assets/images/math.png\" alt=\"\" class=\"card-img-top\">";
                                echo "</div>";
                                echo "<div class=\"card-body\">";
                                echo "<div class=\"card-title text-center\">";
                                echo "<h4>" . $row['titre'] . "</h4>";
                                echo "<button onclick='x(\"" . $row['img'] . "\",0," . $i . ")'>Apprender</button>";
                                echo "<button onclick='x(\"" . $row['video'] . "\",1," . $i . ")'>Voir video</button>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                $i += 1;
                                $count++;
                            } else {
                                echo "<div class=\"item \">";
                                echo "<div class=\"card border-0 shadow\">";
                                echo "<div id='" . $i . "'>";
                                echo "<img src=\"../assets/images/math.png\" alt=\"\" class=\"card-img-top\">";
                                echo "</div>";
                                echo "<div class=\"card-body\">";
                                echo "<div class=\"card-title text-center\">";
                                echo "<h4>" . $row['titre'] . "</h4>";
                                echo "<button onclick='x(\"" . $row['img'] . "\",0," . $i . ")'>Apprender</button>";
                                echo "<button onclick='x(\"" . $row['video'] . "\",1," . $i . ")'>Voir video</button>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                $i += 1;
                                $count++;
                            }
                        }


                        ?>

                    </div>
                </div>
            </div>
        </div>

        <!-- End cours  -->

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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 15,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    }
                }
            })
        </script>



</body>

</html>