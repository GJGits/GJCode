<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="extension.css">

    <title>Home</title>
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

<!-- NAV SECTION -->

<?php
include('nav.php'); ?>

<div class="container v-1">
    <div class="row">
        <h1 class="col-6 offset-3">Welcome to GJCode World!</h1><br>
    </div>
    <p class="text-center">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum.
        Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc
        posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis
        iudicium purus sit amet fermentum.</p>
</div>

<div class="container v-1">
    <div class="card-group">
        <div class="card" >
            <img class="card-img-top" src="https://png.icons8.com/color/1000/FFFFFF/domain.png"  alt="Card image cap">
            <div class="card-body">
                <a href="web.php"><h5 class="card-title">Web</h5></a>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <a href="https://icons8.com">Icon pack by Icons8</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="https://png.icons8.com/color/1000/FFFFFF/monitor.png" alt="Card image cap">
            <div class="card-body">
                <a href="sezione.php?nome=desktop"><h5 class="card-title">Desktop</h5></a>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <a href="https://icons8.com">Icon pack by Icons8</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="https://png.icons8.com/flat_round/1000/FFFFFF/--mobile-phone-text.png" alt="Card image cap">
            <div class="card-body">
                <a href="#"><h5 class="card-title">Mobile</h5></a>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>
                <a href="https://icons8.com">Icon pack by Icons8</a>
            </div>
        </div>
    </div>
</div>

<?php
include ('footer.php');?>

</body>
</html>