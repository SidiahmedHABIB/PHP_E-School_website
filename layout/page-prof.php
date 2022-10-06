<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page_prof</title>
    <!-- render all element normely -->
    <link rel="stylesheet" href="../assets/css/normalize.css">

    <!-- Fonts Awsome -->
    <link rel="stylesheet" href="../assets/css/all.min.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <!-- Bootstrap icon  -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"> -->

    <!-- main file css  -->
    <link rel="stylesheet" href="../assets/css/page-prof-style.css">


</head>

<body>
    <?php include("../backend/database.php") ?>

    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <!-- Start header -->
    <header>
        <div class="container">
            <a href="index-admin.php" class="logo">
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

    <!-- Start form  -->
    <div class="form">
        <div class="container">
            <form action="<?php $_SERVER['PHP_SELF']  ?>" method="POST">
                <h2>MANIPULATION OF COURSES</h2>
                <label for="id">ID</label>
                <input type="text" id="id" name="id" placeholder="ID ">
                <label for="titre">Title of resume</label>
                <input type="text" id="titreid" name="titreid" placeholder="Titre ">
                <label for="img">Image of resume</label>
                <input type="file" id="imgid" name="imgid">
                <input type="text" id="imgt" name="imgt" size="35">
                <label for="video">Video of resume</label>
                <input type="file" id="videoid" name="videoid">
                <input type="text" id="videot" name="videot" size="35">

                <label for="">Matier</label>

                <select name="matier" id="matierid">
                    <option value="math">math</option>
                    <option value="physique">Physique</option>
                    <option value="science">Science</option>
                    <option value="english">Engilsh</option>
                    <option value="francais">Francais</option>
                    <option value="history">History</option>
                    <option value="geology">Geology</option>
                    <option value="chimique">Chimique</option>
                </select>

                <center>
                    <button name="add">Ajouter</button>
                    <button name="edit">Modifier</button>
                    <button name="delet">Supprimer</button>
                </center>



            </form>
        </div>
    </div>

    <!-- End form  -->


    <!-- Start search -->

    <form action="">
        <input type="text" id="sch" name="sch" placeholder="Search" size="80"><br>
    </form>

    <!-- End search -->


    <!-- Start tables -->
    <div class="tables">
        <!-- section carousel -->

        <section>
            <div class="container">
                <h2>LES TABLAUX</h2>
                <br>
                </center>

                <table id="codetabm" border="1">
                    <tr id="lg1">
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Image</th>
                        <th>Video</th>
                        <th>Courses</th>
                    </tr>
                    <?php
                    $host = "localhost";
                    $user = "root";
                    $psw = "";
                    $db = "projet_federe";
                    $conn = mysqli_connect($host, $user, $psw, $db);
                    $r = mysqli_query($conn, "select * from courses");
                    while ($row = mysqli_fetch_array($r)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['titre'] . "</td>";
                        echo "<td>" . $row['img'] . "</td>";
                        echo "<td>" . $row['video'] . "</td>";
                        echo "<td>" . $row['matier'] . "</td>";
                        echo "</tr>";
                    }
                    ?>



                </table>
            </div>
        </section>
        <script>
            $(document).ready(function() {
                $("#sch").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#codetabm tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                    $("#codetabm tr:first").show();
                });
            });


            let tab = document.getElementById("codetabm");
            for (let i = 1; i < tab.rows.length; i++) {
                tab.rows[i].onclick = function() {
                    document.getElementById('id').value = this.cells[0].innerHTML;
                    document.getElementById('titreid').value = this.cells[1].innerHTML;
                    document.getElementById('imgt').value = this.cells[2].innerHTML;
                    document.getElementById('videot').value = this.cells[3].innerHTML;
                }
            }
        </script>


    </div>


    <!-- End tables -->

    <!-- Start Games  -->

    <div class="games">
        <div class="container">
            <form method="POST">
                <h2>MANIPULATION DES JEUX</h2>
                <input type="submit" name="jump" value="disable/enable : jump game" />
                <input type="submit" name="tic" value="disable/enable : tic tac toe game" />
                <input type="submit" name="bird" value="disable/enable : fly bird game" />
                <input type="submit" name="guess" value="disable/enable : typing game" />
            </form>
        </div>
    </div>
    <!-- End Games  -->


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


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>

</html>