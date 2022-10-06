<?php
// include file connection 
include("connection.php");

// Start get data 
$id = "";
if (isset($_POST['id'])) {
    $id = $_POST['id'];
}

$titre = "";
if (isset($_POST['titreid'])) {
    $titre = $_POST['titreid'];
}

$img = "";
if (isset($_FILES["imgid"])) {
    $img = $_FILES["imgid"]["name"];
}

$video = "";
if (isset($_FILES["videoid"])) {
    $video = $_FILES["videoid"]["name"];
}
$matier = "";
if (isset($_POST["matier"])) {
    $matier = $_POST["matier"];
}
// End get data 


// Start add resume -------------------------------------------------------
if (isset($_POST['add'])) {
    if (isset($_POST['matier'])) {
        $sqls = "INSERT INTO courses (titre,img,video,matier) values  ('$titre','$img','$video','$matier')";
        $qry = mysqli_query($conn, $sqls);
        header("location: ../layout/page-prof.php");
    } else {
        echo "<script>alert('oops select les radio1.')</script>";
    }
}
// End add resume -------------------------------------------------------


// Start edit resume -------------------------------------------------------
if (isset($_POST['edit'])) {
    if ($_POST['matier'] == "math") {
        $sqls = "UPDATE math SET titre ='$titre',stitre ='$stitre', img='$imgt', video ='$videot' , regle ='$regle'WHERE id =$id";
        $qry = mysqli_query($conn, $sqls);
        header("location: ../layout/page-prof.php");
    } elseif ($_POST['matier'] == "physique") {
        $sqls = "UPDATE physique SET titre ='$titre',stitre ='$stitre', img='$imgt', video ='$videot' , regle ='$regle'WHERE id =$id";
        $qry = mysqli_query($conn, $sqls);
        header("location: ../layout/page-prof.php");
    } elseif (isset($_POST['science'])) {
        $sqls = "UPDATE  science SET titre ='$titre',stitre ='$stitre', img='$imgt', video ='$videot' , regle ='$regle'WHERE id =$id";
        $qry = mysqli_query($conn, $sqls);
        header("location: ../layout/page-prof.php");
    } else {
        echo "<script>alert('oops select les radio2.')</script>";
    }
}
// End edit resume -------------------------------------------------------


// Start delete resume -------------------------------------------------------
if (isset($_POST['delet'])) {
    if ($_POST['matier'] == "math") {
        $sqls = "DELETE FROM math  WHERE id =$id";
        $qry = mysqli_query($conn, $sqls);
        header("location: ../layout/page-prof.php");
    } elseif ($_POST['matier'] == "physique") {
        $sqls = "DELETE FROM physique  WHERE id =$id";
        $qry = mysqli_query($conn, $sqls);
        header("location: ../layout/page-prof.php");
    } elseif ($_POST['matier'] == "science") {
        $sqls = "DELETE FROM science  WHERE id =$id";
        $qry = mysqli_query($conn, $sqls);
        header("location: ../layout/page-prof.php");
    } else {
        echo "<script>alert('oops select les radio3.')</script>";
    }
}
// End delete resume -------------------------------------------------------


// Satart backend games -------------------------------------------------------
if (array_key_exists('jump', $_POST)) {
    $r = mysqli_query($conn, "select * from games where id=1");
    $row = mysqli_fetch_array($r);
    if ($row['status'] == 0) {
        $sql = "UPDATE games SET status='1' WHERE id=1";
        $res = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE games SET status='0' WHERE id=1";
        $res = mysqli_query($conn, $sql);
    }
} else if (array_key_exists('tic', $_POST)) {
    $r = mysqli_query($conn, "select * from games where id=2");
    $row = mysqli_fetch_array($r);
    if ($row['status'] == 0) {
        $sql = "UPDATE games SET status='1' WHERE id=2";
        $res = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE games SET status='0' WHERE id=2";
        $res = mysqli_query($conn, $sql);
    }
} else if (array_key_exists('guess', $_POST)) {
    $r = mysqli_query($conn, "select * from games where id=4");
    $row = mysqli_fetch_array($r);
    if ($row['status'] == 0) {
        $sql = "UPDATE games SET status='1' WHERE id=4";
        $res = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE games SET status='0' WHERE id=4";
        $res = mysqli_query($conn, $sql);
    }
} else if (array_key_exists('bird', $_POST)) {
    $r = mysqli_query($conn, "select * from games where id=3");
    $row = mysqli_fetch_array($r);
    if ($row['status'] == 0) {
        $sql = "UPDATE games SET status='1' WHERE id=3";
        $res = mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE games SET status='0' WHERE id=3";
        $res = mysqli_query($conn, $sql);
    }
}
// End backend games -------------------------------------------------------


// Session and conn pdo--------------------------------------------
// error_reporting(0);
// session_start();
// try {
//     $user = "root";
//     $psw = "";
//     $conn = new PDO('mysql:host=localhost;dbname=first_db;', $user, $psw);
// } catch (PDOException $e) {
//     echo $e->getMessage();
// }



// Start sign up -------------------------------------------------------
if (isset($_POST['signup'])) {
    extract($_POST);
    if ($password == $passwordc) {
        $sql = $conn->prepare("SELECT * FROM user WHERE email='$email'");
        $sql->execute();
        if (!$row = $sql->fetch() > 0) {
            $sql = $conn->prepare("INSERT INTO user (username, email, password)VALUES ('$username', '$email', '$password')");
            $sql->execute();
            if ($conn) {
                echo "<script>alert('Wow! User Registration Completed.')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['passwordc'] = "";
            } else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Already Exists.')</script>";
        }
    } else {
        echo "<script>alert('Password Not Matched.')</script>";
    }
}
// end sign up -------------------------------------------------------

// Start login -------------------------------------------------------
if (isset($_POST['login'])) {
    extract($_POST);

    $password = md5($password);
    $sql = $conn->prepare("SELECT * FROM user WHERE  username='$username' AND password ='$password'");
    $sql->execute();

    $row = $sql->fetch();
    if (!$row = $sql->fetch() == 1) {
        $_SESSION['username'] = $row['username'];
        header("Location: ../layout/index-valide.php");
    } else {
        echo "<script>alert('Woops! username or Password is Wrong.')</script>";
    }
}
// End login -------------------------------------------------------

// Start sign up professeur  -------------------------------------------------------

if (isset($_POST['signupp'])) {
    extract($_POST);
    $password = md5($_POST['password']);
    $passwordc = md5($_POST['passwordc']);
    $id_school = md5($_POST['id_school']);
    if ($password == $passwordc) {
        $sql = $conn->prepare("INSERT INTO professeur (username, email,password,id_school) VALUES ('$username', '$email', '$password','$id_school')");
        $sql->execute();
        if ($conn) {
            echo "<script>alert('Wow! User Registration Completed.')</script>";
            $username = "";
            $mail = "";
            $_POST['password'] = "";
            $_POST['cpassword'] = "";
            $_POST['id_school'] = "";
        } else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }
    } else {
        echo "<script>alert('Password Not Matched.')</script>";
    }
}
// End sign up professeur  -------------------------------------------------------

// Start login professeur -------------------------------------------------------

if (isset($_POST['loginp'])) {
    extract($_POST);
    $password = md5($password);
    $sql = $conn->prepare("SELECT * FROM professeur WHERE email='$email' AND password='$password' AND (id_school=$id_school)= 5012");
    $sql->execute();
    $row = $sql->fetch();
    if (!$row = $sql->fetch() == 1) {
        $_SESSION['username'] = $row['username'];
        header("Location: ../layout/index-admin.php");
    } else {
        echo "<script>alert('Woops! username or Password is Wrong.')</script>";
    }
}


// End login professeur -------------------------------------------------------
