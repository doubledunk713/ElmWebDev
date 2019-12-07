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
        <i class="fooBar">&#8801;</i>
    </a>
    <div class="login-container">
        <?php if (isset($_SESSION["username"])) {
            ?><form id="logout" action="logout.php">
                <label id="loggedIn">Welcome, <?= $_SESSION["username"]; ?>!</label>
                 <button type="submit" value="Logout" class="logout">Logout</button>
            </form>
        <?php } else { ?>
            <form action="homePage.php" method="POST">
                <input type="text" placeholder="Username" name="username" class="inputBars">
                <input type="password" placeholder="Password" name="psw" class="inputBars">
                <button type="submit">Login</button>
            <?php } ?>
        </form>
    </div>
</div>

<script src="headerFile.js"></script>