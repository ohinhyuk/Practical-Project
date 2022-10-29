<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $userID = $_POST['userID'];
    $pw = $_POST['pw'];
    $gender = $_POST['gender'];
    $bday = $_POST['bday'];
    $age = $_POST['age'];
    $major = $_POST['major'];
    $aboutme = $_POST['aboutme'];
    $firstDay = $_POST['firstDay'];
    $secondDay = $_POST['secondDay'];
    $thirdDay = $_POST['thirdDay'];
    $fourthDay = $_POST['fourthDay'];
    $fifthDay = $_POST['fifthDay'];
    $sixthDay = $_POST['sixthDay'];
    $seventhDay = $_POST['seventhDay'];


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1> 전송 성공 </h1>
    <br>
    <h3>입력하신 데이터는 다음과 같습니다.</h3>
    <div> First name : <?= $fname?> </div>
    <div> Last name : <?= $lname?> </div>
    <div> userID : <?= $userID?> </div>
    <div> PW : <?= $pw?> </div>
    <div> Gender : <?= $gender?> </div>
    <div> Bday : <?= $bday?> </div>
    <div> Age : <?= $age?> </div>
    <div> Major : <?= $major?> </div>
    <div> AboutMe : <?= $aboutme?> </div>
    <div> Available Day : <?= $firstDay?> <?=$secondDay?> <?=$thirdDay?>
        <?=$fourthDay?> <?=$fifthDay?> <?=$sixthDay?> <?=$secondDay?></div>


</body>

</html>