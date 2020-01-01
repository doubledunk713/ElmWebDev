<?php
include("sessionHandling.php");
include("queries.php");

$isPasswordValid = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["psw"];
    $isPasswordValid = validatePassword($username, $password);

    if ($isPasswordValid) {
        $status = getPrivilegeLevel($username);
        $_SESSION["username"] = $username;
        $_SESSION["status"] = $status;

        redirect("homePage.php");
    } else {
        redirect("homePage.php", "Password is invalid!");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Web Dev Team">
        <meta name="robots" content="noindex, nofollow">
        <link rel="stylesheet" href="siteCSS.css">
        <link rel="stylesheet" href="footerCSS.css">
        <link rel="stylesheet" href="homePageCSS.css">
    </head>

    <body>
        <div id="page-container">
            <div>
                <?php
                include 'headerFile.php';
                if (isset($_SESSION["flash"])) {
                    ?>
                    <p id="invalid"><?= $_SESSION["flash"]; ?></p> <?php
                    $_SESSION["flash"] = null;
                }
                ?>
            </div>
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="img_nature_wide.jpg" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="img_snow_wide.jpg" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="img_mountains_wide.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>
            <h1>About Us</h1>

            <p class="historyParagraph">Century Elm Supper club is proudly owned and operated by Betsy and her
                family. She has a lot of history with this establishment as it waas once 
                owned by her great-grandparents, Art & Lou Lenz. Vincent and Glory DeCleene,
                Betsy's grandparents, ran the bar. The whole family lived upstairs through
                the late 40's and early 50's. After Century Elm was purchased by Ken Loehrke
                in the 70's, Betsy's uncle Bill DeCleene bartended here for many years. Betsy's
                family has gathered here almost weekly throughout her life. It seemed like part
                of her destiny that the Century Elm would once again be in her family. She
                wished she could share this with her grandparents and her uncle, but knows they
                guide her along the way. We hope you enjoy your visit and your food here.</p>

            <p id="famLine">We want you to feel like family as well!</p>

            <?php include 'footerFile.html' ?>
        </div>
    </body>
