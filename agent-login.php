<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2c28c53cee.js" crossorigin="anonymous" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <script src="js/hamburger.js" defer></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/agent-login.css">
    <title>Forma</title>
</head>
<body>

<!-- START BEFORE NAV -->
<div class="before-nav">
        <a href="agent-login.php">Pregled Prijava</a>
    </div>
<!-- END BEFORE NAV -->

<!-- START NAV -->
    <nav>
        <a href="index.html">
            <img src="images/eagle-logo.jpg" alt="Eagle" class="nav-logo" onclick="document.body.scrollIntoView()">
        </a>
        <ul>
            <li><a href="index.html" onclick="document.body.scrollIntoView()">Početna</a></li>
            <li><a href="index.html#info">Info</a></li>
            <li><a href="index.html#cenovnici">Cenovnik</a></li>
            <li><a href="index.html#kontakt">Kontakt</a></li>
        </ul>
        <p><i id="hamburger-button" class="fa fa-bars"></i></p>
    </nav>

    <ul class="ul-phone">
        <div>
            <li><a href="index.html" onclick="document.body.scrollIntoView()"><i class="fa fa-home"></i> POČETNA</a></li>
            <li style="padding-top: 10px;"><a href="index.html#info"><i class="fa fa-question"></i> INFO</a></li>
            <li style="padding-top: 10px;"><a href="index.html#cenovnici"><i class="fa fa-dollar-sign"></i> CENOVNIK</a></li>
            <li style="padding-top: 10px;"><a href="index.html#kontakt"><i class="fa fa-user"></i> KONTAKT</a></li>
        </div>
    </ul>
<!-- END NAV -->

<!-- START FORM -->

    <?php

        include("dbconnection.php");

        session_start();

    ?>

    <div class="agent-login-center">
        <form action="agent-login.php" method="POST">
            <p style="width:100%;"><label>Email</label></p>
            <input type="text" name="Email" id="email" placeholder="Unesite email..." required="true">

            <p style="width:100%; padding-top:15px;"><label>Password</label></p>
            <input type="password" name="Password" id="password" placeholder="Unesite password..." required="true">

            <input id="submit-button-login" type="submit" name="login" value="PRIJAVITE SE">
        </form>
    </div>

    <?php

        if(isset($_POST["login"])){
            $Email = $_POST["Email"];
            $Password = $_POST["Password"];

            $select = mysqli_query($connection, "SELECT * FROM agent WHERE Email = '$Email' AND Password = '$Password'");
            $row = mysqli_fetch_array($select);

            if(is_array($row)){
                $_SESSION["Email"] = $row["Email"];
                $_SESSION["Password"] = $row["Password"];
            }
            else{
                echo "<script>";
                echo "alert('Pogrešno uneta email adresa ili šifra!');";
                echo "window.localtion.href = 'agent-login.php';";
                echo "</script>";
            }
        }

        if(isset($_SESSION["Email"])){
            header("location:agent.php");
        }

    ?>

<!-- END FORM -->

<!-- START FOOTER -->

    <footer>
        <div>
            <span style="display:flex; justify-content:left; align-items:center; gap:10px; color:#fff; font-size:20px;">
                <a href="index.html">
                    <img src="images/eagle-logo.jpg" alt="Eagle" class="nav-logo" onclick="document.body.scrollIntoView()">
                </a>
                Eagle
            </span>
            <p style="color: #fff; max-width: 250px; padding-top:10px; padding-bottom:10px;">
                Sve na jednom mestu. Najbolja ponuda i najbolje cene.
                Izaberi sigurnu opciju. Uštedi novac u svom budžetu.
            </p>
            <div style="display:flex; gap:10px;">
                <a class="sm-a" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                <a class="sm-a" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a class="sm-a" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                <a class="sm-a" href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

<!-- END FOOTER -->

<!-- START AFTER FOOTER -->

    <div class="after-footer">
        <p>
            Designed and Developed by <a href="https://github.com/milosm00" target="_blank">MM</a>.
        </p>
    </div>

<!-- END AFTER FOOTER -->
</body>
</html>