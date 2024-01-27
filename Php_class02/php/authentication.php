<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submitted data review</title>
</head>

<body>

    <style>
        div {

            display: flex;
            justify-content: center;
            margin: 200px;

        }

        div a {

            text-decoration: none;
            font-size: 25px;

        }

        div Button {

            padding: 13px 37px;

        }
    </style>

    <?php

    $UserFirstName = $_POST["fname"];
    $UserLastName = $_POST["lname"];
    $UserEmail = $_POST["email"];
    $UserMobile = $_POST["mobile"];
    $UserGender = $_POST["Gender"];
    $UserBirthDate = $_["birth"];
    $UserCity = $_POST["city"];
    $UserAreaPin = $_POST["area_pin"];
    $UserCountry = $_POST["country"];
    $UserQualification = $_POST["qualification"];
    $UserEspeciality = $_POST["specialization"];
    $UserFavouriteColor = $_POST["color"];
    $UserPassWord = $_POST["password"];
    $UserDescription = $_POST["opinion"];

    echo "User first name is: " . $UserFirstName . "<br>" . "User last name: " . $UserLastName . "<br>" . "User email: " . $UserEmail . "<br>" . "User mobile number: " . $UserMobile . "<br>" . "User gender: " . $UserGender . "<br>"
        . "User birth date: " . $UserBirthDate . "<br>" . "User city name: " . $UserCity . "<br>" . "User area pin: " . $UserAreaPin . "<br>" . "User country name: " . $UserCountry . "<br>" . "User qualification: " . $UserQualification . "<br>" . "User espeiality: " . $UserEspeciality . "<br>" . "User favourite color: " . $UserFavouriteColor . "<br>" . "User password: " . $UserPassWord . "<br>" . "User bio: " . $UserDescription;

    ?>

    <div>

        <Button><a href="../sign_in/sign_in.html">Done</a></Button>

    </div>

</body>

</html>