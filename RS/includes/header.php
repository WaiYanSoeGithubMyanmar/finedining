<?php
$companyName = "Franklin's Fine Dining";
include('includes/arrays.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/style.css">
</head>

<body id="final-example">
    <div class="wrapper">
        <div id="banner">
            <a href="/" title="Return to Home">
                <img src="assets/img/banner.png" [alt]="$companyName"></a>
        </div>

        <div id="nav">
            <?php include('includes/nav.php') ?>
        </div>

        <div class="content">
        </div>
</body>

</html>