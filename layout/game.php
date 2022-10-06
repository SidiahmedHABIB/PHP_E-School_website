<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
    <!-- render all element normely -->
    <link rel="stylesheet" href="../assets/css/normalize.css">

    <!-- Fonts Awsome -->
    <link rel="stylesheet" href="../assets/css/all.min.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- main file css  -->
    <link rel="stylesheet" href="../assets/css/game-style.css">

</head>

<body>
    <!-- Start header  -->
    <header>
        <div class="container">
            <a href="#" class="logo">
                <img src="../assets/images/logo.png" alt="logo">
            </a>
            <nav>
                <i class="fas fa-bars toggle-menu"></i>
                <ul>
                    <li><a href="logout.php">Logout</a></li>
                </ul>

            </nav>
        </div>
    </header>
    <!-- End header  -->
    <?php
    include '../backend/connection.php';
    ?>

    <!-- Start Games -->
    <div class="games">
        <div class="container">
            <div class="card-container">
                <?php
                $r1 = mysqli_query($conn, "select * from games where id=1");
                $row1 = mysqli_fetch_array($r1);
                if ($row1['status'] == 1) {
                    $print = "
                    <div class=\"card\">
                    <img src=\"../assets/images/jump.PNG\" style=\"width:70%; height: 70%; \">
                    <h1>jumping game</h1>
                    <a href=\"#jumping game \"><button name=\"apprender \" id=\"apprender \">jumping game</button></a>
                    </div>";
                    echo $print;
                }
                $r2 = mysqli_query($conn, "select * from games where id=2");
                $row2 = mysqli_fetch_array($r2);
                if ($row2['status'] == 1) {
                    $print = "
                    <div class=\"card\">
                    <img src=\"../assets/images/tictactoa.png\" style=\"width:70%; height: 70%; \">
                    <h1>tic tac toa</h1>
                    <a href=\"#tic_tac_toa \"><button name=\"apprender \" id=\"apprender \">tic tac toa</button></a>
                    </div>";
                    echo $print;
                }
                $r3 = mysqli_query($conn, "select * from games where id=3");
                $row3 = mysqli_fetch_array($r3);
                if ($row3['status'] == 1) {
                    $print = "
                    <div class=\"card\">
                    <img src=\"../assets/images/flappy-bird.PNG\" style=\"width:70%; height: 70%; \">
                    <h1>flappy bird</h1>
                    <a href=\"#flappy_bird \"><button name=\"apprender \" id=\"apprender \">flappy bird</button></a>
                    </div>";
                    echo $print;
                }
                $r4 = mysqli_query($conn, "select * from games where id=4");
                $row4 = mysqli_fetch_array($r4);
                if ($row4['status'] == 1) {
                    $print = "
                    <div class=\"card\">
                    <img src=\"../assets/images/typing_game.png\" style=\"width:70%; height: 70%; \">
                    <h1>typing game</h1>
                    <a href=\"#typing_game\"><button name=\"apprender \" id=\"apprender \">typing game</button></a>
                    </div>";
                    echo $print;
                }

                ?>

            </div>
        </div>
    </div>
    <!-- End games  -->
    <!-- Start footer -->
    <div class="footer">
        <div class="container">
            <h1>kids paradise</h1>
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