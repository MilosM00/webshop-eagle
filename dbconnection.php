<?php
    $connection = new mysqli("localhost", "root", "", "webprodavnica");

    if ($connection->connect_error)
    {
        echo "Greška prilikom povezivanja sa bazom podataka. <br />" . $connection->error;
        exit();
    }
?>