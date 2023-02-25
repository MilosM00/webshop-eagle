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
    <link rel="stylesheet" href="css/form.css">
    <title>Hvala</title>
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

<!-- START ISPIS PODATAKA -->

<?php
    include("dbconnection.php");

    $Paket = $_POST["Paket"];
    $Ime = $_POST["Ime"];
    $Prezime = $_POST["Prezime"];
    $Email = $_POST["Email"];
    $BrojTelefona = $_POST["BrojTelefona"];

    $kod = $connection->prepare("insert into korisnik(Ime, Prezime, Email, BrojTelefona, Paket) values(?,?,?,?,?)");
    $kod->bind_param("sssss", $Ime, $Prezime, $Email, $BrojTelefona, $Paket);
    $kod->execute();
?>

<div class="hvala-div">
    <i class="fa fa-check"></i>
    <p style="text-align:center; font-size:30px; padding-top: 50px; padding-bottom: 50px;">
        FORMA JE USPEŠNO POPUNJENA! <br /> <br />
        HVALA NA PRIJAVI! <br />
        USKORO ĆEMO VAS KONTAKTIRATI! <br />
        VAŠ EAGLE TIM.
    </p>
    <a href="index.html">NAZAD NA POČETNU</a>
</div>

<style>
    .hvala-div{
        padding-top: 100px;
        padding-bottom: 100px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .hvala-div > i{
        display: flex;
        justify-content: center;
        align-items: center;

        font-size: 50px;
        color: #03C03C;
        padding: 15px;
        border: 2px solid #03C03C;
        border-radius: 50%;
        width: 100px;
        height: 100px;
    }

    .hvala-div > a{
        padding: 10px;
        width: 200px;
        text-align: center;
        background-color: #03C03C;
        color: #fff;
        border-radius: 4px;
        text-decoration: none;
    }
</style>

<!-- END ISPIS PODATAKA -->

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

<script>
    setTimeout(()=>{
        window.location.replace("index.html");
    }, 10000)
</script>

</body>
</html>