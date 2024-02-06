<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link style sheet -->
    <link rel="stylesheet" href="style.css">
    <!-- tab logo -->
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Sign in</title>
</head>

<body>


    <!-- main section start -->


    <main>

        <!-- hero section start -->


        <section>

            <div class="hero_container">

                <div class="hero_wrapper">

                    <div class="content_flex">

                        <h1>
                            Sign in
                        </h1>

                        <?php

                        if (isset($_GET['msg'])) {

                            $msg = $_GET['msg'];
                            echo "<h2>$msg</h2>";
                        }

                        ?>

                        <div class="username">

                            <h6>
                                Username
                            </h6>

                            <div class="user_input">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                                <input type="text" name="Username" id="username">

                            </div>

                        </div>

                        <div class="user_password">

                            <h6>
                                Password
                            </h6>

                            <div class="password">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                </svg>

                                <input type="password" name="password" id="password">

                            </div>

                        </div>

                        <button type="submit">SIGN IN</button>

                        <a href="../forgetPass/forgetPass.html">Forgot password ?</a>

                    </div>

                </div>

            </div>

        </section>


        <!-- hero setion end -->

    </main>


    <!-- main section end -->


</body>

</html>