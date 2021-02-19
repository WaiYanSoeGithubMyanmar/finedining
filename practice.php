<?php

declare(strict_types=1);

define("TITLE", "Arrays");

$myname = "Alex";

$age_group = array("child", "teenager", "adult");

$handlebar = array(
    "name" => "handlebar",
    "color" => "black"
);

$fu_manchu = array(
    "name" => "fu_manchu",
    "color" => "blue"
);

$gentlemen = array(
    array(
        "firstname" => "Carter",
        "country" => "Canada"
    ),
    array(
        "firstname" => "Rodrigo",
        "country" => "Uruguay"
    ),
    array(
        "firstname" => "Giovanni",
        "country" => "Italy"
    )
);

$buytype = "MO";

$ruletype = "E";
$endtype = "END";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <a href="#"></a>

        <h1>Get Your Hands Dirty: <small> <?php echo TITLE; ?></small></h1>

        <h2>Profile</h2>

        <div class="sandbox">
            <h3><?php echo $gentlemen[0]["firstname"] . " from " . $gentlemen[0]["country"];  ?></h3>
            <p>
                <?php echo $gentlemen[0]["firstname"] .  " is quite the " . $age_group[2] ?>
                !He sports a solid
                <?php echo  $handlebar["name"]; ?>
                moustache that is
                <?php echo $handlebar["color"]; ?>
            </p>

            <h3><?php echo $gentlemen[1]["firstname"] . " from " . $gentlemen[1]["country"];  ?></h3>
            <p>
                <?php echo $gentlemen[1]["firstname"] .  " is quite the " . $age_group[1] ?>
                !He sports a solid
                <?php echo  $fu_manchu["name"]; ?>
                moustache that is
                <?php echo $fu_manchu["color"]; ?>
            </p>

            <a href="index.php">Back to the Main page</a>

            <?php

            if ($buytype == "MO" && ($ruletype == "T" || $endtype != "OR")) {
                echo "If: <br>";
            }


            foreach ($gentlemen  as $gm) {
                echo "I am from " . $gm["country"] . "<br>";
            }

            $a = 1;

            do {
                echo "Number: $a <br>";
                $a++;
            } while ($a <= 10);

            $dinner = array("Meat", "potatoes", 'beans', 'rice');
            sort($dinner);

            foreach ($dinner as $d) {
                echo strtolower($d) . "<br>";
            }

            $password = "MyPassword";
            echo "Before : $password <br>";

            echo "After :" . sha1($password) . "<br>";

            function sum(int $a, int $b)
            {
                return $a + $b;
            }

            echo sum(2, 9);
            ?>

        </div>

    </div>

</body>

</html>