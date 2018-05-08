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

$courseName = strtolower(explode(".", $_GET['name'])[0]);

$connection = mysqli_connect("localhost", "root", "", "gjcode");

if (!$connection) {
    echo mysqli_errno($connection);
}

$preparedstatement = mysqli_prepare($connection, "select nome, path from video where nome_corso=? order by posizione");
mysqli_stmt_bind_param($preparedstatement, "s", $courseName);
mysqli_stmt_bind_result($preparedstatement, $nome_video, $path_video);

$to_show = '<div class="container-fluid"><div class="row v-1"><div class="list-group col-2">';

while (mysqli_stmt_fetch($preparedstatement)) {
    $to_show .= '<button type="button" class="list-group-item list-group-item-action">' . $nome_video . '</button>';
}

$to_show .= '</div><div class="embed-responsive embed-responsive-16by9 offset-2 col-6 ">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
</div>';

echo $to_show;

// TODO: check the course availability from the db


?>

</body>

</html>


