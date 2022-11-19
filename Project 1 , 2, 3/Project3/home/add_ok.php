<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $bday = $_POST['bday'];
    $age = $_POST['age'];
    $remark = $_POST['remark'];
    $firstDay = $_POST['firstDay'];
    $secondDay = $_POST['secondDay'];
    $thirdDay = $_POST['thirdDay'];
    $fourthDay = $_POST['fourthDay'];
    $fifthDay = $_POST['fifthDay'];
    $sixthDay = $_POST['sixthDay'];
    $seventhDay = $_POST['seventhDay'];
    $agree = $_POST['agree'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <script src="https://kit.fontawesome.com/e879e74340.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <style>
        @import url("my.css");

        div{
            font-size: 20px;
            padding : 5px;
        }
        body{background-color : lightcyan;}
    </style>

</head>

<body>
    <nav class="navbar navbar-info bg-info justify-content-between">
            <a class="navbar-brand" style="color: white">Input Contents</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="window-search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit" id="btn-search">Search</button>
            </form>
    </nav>


    <div id="input-form">

    <h2> <i class="fa-regular fa-address-card" > Data </i> </h2>
    <hr>
    <br>
    <div> 1) First name :  <?= $fname?> </div>
    <div> 2) Last name :  <?= $lname?> </div>
    <div> 3) Gender :  <?= $gender?> </div>
    <div> 4) Bday :  <?= $bday?> </div>
    <div> 5) Age :  <?= $age?> </div>
    <div> 6) Remark :  <?= $remark?> </div>
    <div> 7) Available Day :  <?= $firstDay?> <?=$secondDay?> <?=$thirdDay?>
        <?=$fourthDay?> <?=$fifthDay?> <?=$sixthDay?> <?=$seventhDay?></div>
    <div> 8) Agree :  <?= $agree?> </div>

    <div style="text-align : right; padding : 10px;">
    <i class="fa-brands fa-twitter fa-lg"></i> <i class="fa-regular fa-paper-plane fa-lg"></i> <i class="fa-brands fa-instagram fa-lg"></i>
    </div>

    </div>
</body>

</html>