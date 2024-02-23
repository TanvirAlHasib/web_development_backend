<?php

//session start
session_start();
//session end
session_destroy();

header("Location:../dashboard/sign-in.php");
