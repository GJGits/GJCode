<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="extension.css">

    <title>Desktop</title>
</head>
<body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<?php
include('nav.php') ?>

<?php

$to_show = "<div class=\"container bg-dark-light v-1\"><div class=\"card-deck v-1\">";
$connection = mysqli_connect("localhost", "root", "", "gjcode");

if (!$connection) {
    echo mysqli_errno($connection);
}

$nome_sezione = explode(".", $_GET['nome'])[0];
$prepared_statement = mysqli_prepare($connection, "select nome,link, img_link, descrizione,last_update from corso where sezione = ?");
mysqli_stmt_bind_param($prepared_statement, "s", $nome_sezione);
mysqli_stmt_execute($prepared_statement);
mysqli_stmt_bind_result($prepared_statement, $nome_corso, $href, $img_link, $descrizione_corso, $last_update);

mktime($hour = date("H"), $minute = date("i"), $second = date("s"), $month = date("n"),
    $day = date("j"), $year = date("Y"));

//$lastYear = explode("-", explode(" ", $last_update)[0])[0];
//$lastMonth = explode("-", explode(" ", $last_update)[0])[1];
//$lastDay = explode("-", explode(" ", $last_update)[0])[2];
//$lastHour = explode("-", explode(" ", $last_update)[1])[0];
//$lastMinute = explode("-", explode(" ", $last_update)[1])[1];
//$lastSecond = explode("-", explode(" ", $last_update)[1])[2];

// TODO: implementa funzione per calcolare differenza di tempo in modo tale da ottenere un'informazione sull'ultimo aggiornamento


while (mysqli_stmt_fetch($prepared_statement)) {

    $to_show .= '<div class="card"><img class="card-body" src="' . $img_link . '">';
    $to_show .= '<div class="card-body"><h5 class="card-title"><a href="' . $href . '">' . $nome_corso . '</a> </h5>';
    $to_show .= '<p class="card-text">' . $descrizione_corso . '</p>';
    $to_show .= '<a href="https://icons8.com">Icon pack by Icons8</a>
                <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </p>
            </div>
        </div>';

}

$to_show .= "</div></div>";

echo $to_show;

?>


</body>
</html>