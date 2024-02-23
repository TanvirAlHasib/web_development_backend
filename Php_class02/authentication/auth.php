<?php

//session start
session_start();

//I have to use !empty method otherwise there is remaining a bug that is without any email and password user can enter the dashbord just pressing the sign in button
if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['password']) && !empty($_POST['password']))) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $link = mysqli_connect('localhost', 'root', '', 'phpclass03');

    if ($link) {

        $selectDataQuery = "SELECT * FROM `registration` WHERE `email` = '$email' AND `password` = '$password'";

        $result = mysqli_query($link, $selectDataQuery);

        if (mysqli_num_rows($result)) {

            while ($row = mysqli_fetch_row($result)) {

                if (($row[3] == $email) && ($row[13] == $password)) {

                    $UserName = $row[1];

                    $_SESSION['name'] = $UserName;

                    header("Location:../dashboard/index.php");
                    exit();
                }
            }

            header('Location:../dashboard/sign-in.php?msg= authentication failed');
            exit();
        } else {

            header('Location:../dashboard/sign-in.php?msg= please signup');
        }
    } else {

        echo "data base connection error";
    }
} else {

    header("Location:../dashboard/sign-in.php?msg=please enter all the fields");
}
