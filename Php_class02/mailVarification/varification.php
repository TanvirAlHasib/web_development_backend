<?php

session_start();

if (isset($_POST["varify"])) {

    if (isset($_POST["varificationNumber"])) {

        if ($_SESSION['varificationNumber'] == $_POST["varificationNumber"]) {
            header("Location:../data_review.php?msg=pin matched successfully");
        } else {
            header("Location:varification.php?msg=pin did not match");
            echo "pin did not match";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./varificationStyle.css">
    <title>varification</title>
</head>

<body>
    <div class="container">
        <div class="items">
            <form action="" method="post">
                <input type="number" name="varificationNumber" id="varificationNumber">
                <button id="varifyButton" name="varify" type="submit">varify</button>
            </form>
        </div>
    </div>

</body>

</html>