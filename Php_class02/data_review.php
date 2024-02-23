<?php
//database link
$link = mysqli_connect('localhost', 'root', '', 'phpclass03');

//if link becomes successfull then
if ($link) {

    $UserFirstName = $_POST["fname"];
    $UserLastName = $_POST["lname"];
    $UserEmail = $_POST["email"];
    $UserMobile = $_POST["mobile"];
    $UserGender = null;
    if (isset($_POST['Gender'])) {

        $UserGender = $_POST["Gender"];
    }

    $UserBirthDate = $_POST["birth"];
    $UserCity = $_POST["city"];
    $UserAreaPin = $_POST["area_pin"];
    $UserCountry = $_POST["country"];
    $UserQualification = $_POST["qualification"];
    $UserEspeciality = null;
    if (isset($_POST["specialization"])) {

        $UserEspeciality = $_POST["specialization"];
        $UserEspeciality = implode(',', $UserEspeciality);
    }

    $UserFavouriteColor = $_POST["color"];
    $UserPassWord = md5($_POST["password"]);
    $UserDescription = $_POST["opinion"];
    //for image
    if (isset($_FILES['image'])) {

        $UserImageName = $_FILES['image']['name'];
        //before uploading the image $_FILES variable take the image and put in a temporary direction thats why we have to access the temporary direction to upload the image in server's especific location and we do that by move_uploaded_file function, in this case our server is local server that's why we saving the image in our local machine.
        $UserImageTemp = $_FILES['image']['tmp_name'];
        $UserImageDestination = './dashboard/images/' . time() . $UserImageName;
        move_uploaded_file($UserImageTemp, $UserImageDestination);
    } else {

        $UserImageDestination = null;
    }

    //data reviewing
    echo "User first name is: " . $UserFirstName . "<br>" . "User last name: " . $UserLastName . "<br>" . "User email: " . $UserEmail . "<br>" . "User mobile number: " . $UserMobile . "<br>" . "User gender: " . $UserGender . "<br>"
        . "User birth date: " . $UserBirthDate . "<br>" . "User city name: " . $UserCity . "<br>" . "User area pin: " . $UserAreaPin . "<br>" . "User country name: " . $UserCountry . "<br>" . "User qualification: " . $UserQualification . "<br>" . "User espeiality: " . $UserEspeciality . "<br>" . "User favourite color: " . $UserFavouriteColor . "<br>" . "User password: " . $UserPassWord . "<br>" . "User bio: " . $UserDescription . "<br>" . "User image: " . $UserImageDestination;


    //data storing to data base
    $data_inserting = mysqli_query($link, "INSERT INTO registration(first_name, last_name, email, mobile, gender, birth, city, area_pin, country, qualification, specialization, favourite_color, password, bio, user_image) VALUES ('$UserFirstName', '$UserLastName', '$UserEmail', '$UserMobile', '$UserGender', '$UserBirthDate', '$UserCity', '$UserAreaPin', '$UserCountry', '$UserQualification', '$UserEspeciality', '$UserFavouriteColor', '$UserPassWord', '$UserDescription', '$UserImageDestination')");
} else {

    echo "<h1>database is not connected</h1>";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../sign_in/logo.png" type="image/x-icon">
    <title>submitted data review</title>
</head>

<body>

    <style>
        div {
            display: flex;
            justify-content: center;
            margin: 200px;
        }

        div form {
            text-decoration: none;
            font-size: 25px;
        }

        div input {
            padding: 13px 37px;
        }
    </style>

    <div>
        <form action="./dashboard/sign-in.php?msg=registration done" method="post">
            <input type="submit" name="done" value="Done">
        </form>
    </div>

</body>

</html>