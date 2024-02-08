<?php

if ((isset($_POST['email'])) && (isset($_POST['password']))) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $link = mysqli_connect('localhost', 'root', '', 'phpclass03');

    if ($link) {

        $selectDataQuery = "SELECT * FROM `registration` WHERE `email` = '$email' AND `password` = '$password'";

        $result = mysqli_query($link, $selectDataQuery);

        if (mysqli_num_rows($result)) {

            while ($row = mysqli_fetch_row($result)) {

                if (($row[3] == $email) && ($row[13] == $password)) {

                    header("Location:../dashboard/index.html");
                    exit();
                }
            }

            header('Location:../dashboard/sign-in.html?msg= authentication failed');
            exit();
        } else {

            header('Location:../dashboard/sign-up.html?msg= please signup');
        }
    } else {

        echo "data base connection error";
    }
} else {

    echo 'Please enter all fields';
}
