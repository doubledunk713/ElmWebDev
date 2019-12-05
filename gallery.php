<!DOCTYPE html>
<?php error_reporting(E_ALL | E_STRICT) ?>
<!--
    gallery.php
    2019-12-03
    Description:
  
    Example URL:
    http://webdev.cs.uwosh.edu/students/team5/gallery.php
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="The Elm Dev">
        <meta name="description" content="Gallery">
        <meta name="keywords" content="century elm, supper, club, supper club, 
              restaruant, food">
        <meta name="robots" content="noindex, nofollow">
        <link rel="stylesheet" href="contentCSS.css">
        <link rel="stylesheet" href="headerCSS.css">
        <link rel="stylesheet" href="footerCSS.css">
        <title>Century Elm Supper Club | Gallery</title>
    </head>
    <body>
        <?php include './headerFile.php'; ?>
        <?php
        $dir = "./img/";
        $images = glob($dir . "*.jpg");
        $num = 0;
        ?>
        <div class="imgRow">
            <?php
            foreach ($images as $image) {
                ?>
                <div class="imgCol">
                    <img id="img<?= $num ?>" src="<?= $image ?>" alt="images">
                </div>
                <?php
                $num++;
            }
            ?>
        </div>
    <?php

    function print_r2($val) {
        echo '<pre>';
        print_r($val);
        echo '</pre>';
    }
    ?>
    <?php include './footerFile.html'; ?>
</body>
</html>
