<!DOCTYPE html>
<?php error_reporting(E_ALL | E_STRICT);
include("sessionHandling.php");
?>
<!--
    menu.php
    2019-10-30
    Description:
    
    Example URL:
    http://webdev.cs.uwosh.edu/students/team5/menu.php
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="The Elm Dev">
        <meta name="description" content="Some of Our Favorites - Menu">
        <meta name="keywords" content="century elm, supper, club, supper club, 
              restaruant, food">
        <meta name="robots" content="noindex, nofollow" />
        <link rel="stylesheet" href="siteCSS.css">
        <title>Century Elm Supper Club | Menu</title>
    </head>
    <body>
        <?php include './headerFile.php'; ?>
        <h1>Some of Our Favorites —</h1>
        <div class="textRow">
            <div class="textCol">
                 <h2 class="center">Appetizers</h2>
                <p>
                    Beer battered Tenderloin tips – severed with a side of
                    Phoenix sauce $ 9.95<br>
                    Shrimp Cocktail – 6 jumbo shrimp served with sauce $ 8.95<br>
                    Gator – pan fried or deep fried $ 6.95<br>
                    Cheese curds $ 6.45<br>
                    Breaded Mushrooms $ 5.45<br>
                    Jalapeno poppers $ 6.45<br>
                    Sauces: featuring Phoenix sauce – Betsy’s homemade
                    horseradish creation. Other sauces: ranch, bleu cheese,
                    honey mustard, BBQ<br>
                </p>
                <h2 class="center">Burgers</h2>
                <p>
                    Farmer burger – fried egg on top (add cheese -$0.50) $ 8.95
                    <br>
                    Mushroom Swiss burger $ 9.25<br>
                    Patty Melt – grilled onion, swiss cheese on rye bread $ 9.45
                    <br>
                    Burnin’ Love burger – Pepperjack cheese, grilled jalapenos
                    $ 9.45<br>
                </p>
                <h2 class="center">Sandwiches</h2>
                <p>
                    Loaded Chicken – grilled chicken with onions, mushrooms, and
                    swiss cheese $ 8.95<br>
                    Chicken club – grilled chicken breast, bacon, cheese, ranch
                    $ 8.95<br>
                    Portabella mushroom cap – grilled mushroom with provolone
                    cheese $ 7.45<br>
                    Loaded BLT – extra bacon and choice of cheese $ 6.95<br>
                    All sandwiches are served with your choice of side. Soup and
                    salad bar can be added for $3.95<br>
                </p>
                <h2 class="center">Broasted Chicken</h2>
                <p>
                    2 Piece $ 8.95<br>
                    4 Piece $ 11.95<br>
                    12 piece to go 18.95<br>
                </p>
                <h2 class="center">Seafood Selections</h2>
                <p>
                    Grouper – Pan fried or deep fried $ 13.95<br>
                    Walleye Pike – Pan fried or deep fried $ 14.95<br>
                    Salmon – grilled with bruschetta and fresh Parmesan $ 17.95
                    <br>
                    Haddock – broiled, deep fried, or pan fried $ 14.95<br>
                    Shrimp Scampi $ 15.95<br>
                    Gator – house favorite! Pan fried or deep fried $ 16.95<br>
                </p>
            </div>
            <div class="textCol">
                 <h2 class="center">
                    Hand Cut USDA Choice Steaks – always fresh. We will cut a
                    steak to your appetite, if you choose
                </h2>
                <p>
                    Tenderloin 6oz - $ 23.95 8oz - $ 28.95<br>
                    Ribeye 12oz - $ 22.95 16oz - $ 25.95<br>
                </p>
                <h2 class="center">The "Matty"</h2>
                <p>
                    22oz. ribeye smothered with portabellas 22oz - $ 37.95<br>
                </p>
                <h2 class="center">Friday Fish Selections – served on Fridays only</h2>
                <p>
                    Lake Perch $ 17.95<br>
                    White Fish (all you can eat) $ 11.95<br>
                    Fisherman’s platter – Shrimp, haddock, perch, and walleye
                    $ 20.95<br>
                </p>
                <h2 class="center">
                    Prime Rib – every Saturday. Served with home made Phoenix
                    sauce
                </h2>
                <p>
                    Queen cut – 10-12oz $ 22.95<br>
                    King cut – 14-16oz $ 25.95<br>
                </p>
                <h2 class="center">Surf and Turf</h2>
                <p>
                    Add 3 shrimp (grilled, pan fried, or deep fried) $ 4.95<br>
                    and or a Lobster tail $ 12.95<br>
                </p>
            </div>
        </div>
        <h1>
            <a href="./CEMenuRev2.1.pdf" target="_blank">View Our Full Menu —
            </a>
        </h1>
        <?php include './footerFile.html'; ?>
    </body>
</html>
