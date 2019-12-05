<img src="centuryElmImage.png" alt="Century Elm Supper Club" class="center">

<div class="navBar" id="resNavBar">
    <a class="active" href="homePage.php">Home</a>
    <a href="menu.php">Menu</a>
    <a href="events.php">Events</a>
    <a href="gallery.php">Gallery</a>
    <a href="Reservation.php">Reservations</a>
    <a href="newContacts.php">Contact</a>
    <a href="register.php">Register</a>
    <a href="javascript:void(0);" class="icon">
        <i class="fooBar"></i>
    </a>
    <div class="login-container">
        <?php if (isset($_SESSION["username"])) {
            ?> <p>Welcome, <?= $_SESSION["username"]; ?></p>
            <form id="logout" action="logout.php">
                <input type="submit" value="Logout">
            </form>
        <?php } else { ?>
            <form action="homePage.php" method="POST">
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="psw">
                <button type="submit">Login</button>
            <?php } ?>
        </form>
    </div>
</div>

<script src="headerFile.js"></script>