<?php

//Define Constants
define("TITLE", "Variables and Constants");

//Variables
$myname = "Wai Yan Soe";
$fav_color = "Green";
$birth_year = 2001;

date_default_timezone_set('Asia/Yangon');
$today = date('F j, Y');
$this_year = date('Y');

$myage = ($this_year - $birth_year);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get your hand Dirty <?php echo TITLE ?> </title>

</head>

<body>
    <div class="wrapper">
        <a href="#"></a>

        <h1>Get Your Hands Dirty: <small> <?php echo TITLE; ?></small></h1>

        <h2>Profile</h2>

        <div class="sandbox">
            <h3>Today's Date:</h3>
            <p><?php echo $today ?></p>

            <h3>Name:</h3>
            <p><?php echo $myname ?></p>

            <h3>Favourite Color:</h3>
            <p><?php echo $fav_color ?></p>

            <h3>Age:</h3>
            <p><?php echo $myage ?></p>
        </div>

    </div>
</body>

</html>