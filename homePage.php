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
        <link rel="stylesheet" href="./siteCSS.css">
        <link rel="stylesheet" href="./slideshowCSS.css">
        <title>Century Elm Supper Club | Home</title>
    </head>

    <body>

        <div id="page-container">
            <!--header-->
            <?php
            include './headerFile.php';
            if (isset($_SESSION["flash"])) {
                ?>
                <p id="invalid"><?= $_SESSION["flash"]; ?></p> <?php
                $_SESSION["flash"] = null;
            }
            ?>
            <!-- Slideshow container -->
            <div class="slideshow-container box-shadow">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="./img/IMG_1226.jpg" alt="img1">
                    <div class="text">Walleye pike dinner</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="./img/IMG_1230.jpg" alt="img2">
                    <div class="text">Loaded BLT sandwich</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="./img/IMG_1246.jpg" alt="img3">
                    <div class="text">Whitefish dinner</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev">&#10094;</a>
                <a class="next">&#10095;</a>

            </div>
            <br>

            <!-- The dots/circles -->
            <div class="centerText">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>

            <script src="slideshow.js"></script>

            <!--about-->
            <h1>About Us</h1>

            <p class="historyParagraph">
                Century Elm Supper club is proudly owned and operated by Betsy and her
                family. She has a lot of history with this establishment as it was once 
                owned by her great-grandparents, Art & Lou Lenz. Vincent and Glory DeCleene,
                Betsy's grandparents, ran the bar. The whole family lived upstairs through
                the late 40's and early 50's. After Century Elm was purchased by Ken Loehrke
                in the 70's, Betsy's uncle Bill DeCleene bartended here for many years. Betsy's
                family has gathered here almost weekly throughout her life. It seemed like part
                of her destiny that the Century Elm would once again be in her family. She
                wished she could share this with her grandparents and her uncle, but knows they
                guide her along the way. We hope you enjoy your visit and your food here.</p>

            <p id="famLine">We want you to feel like family as well!</p>

            <!--footer-->
            <?php include './footerFile.html' ?>
        </div>
        <div class="bg-image"></div>
    </body>
