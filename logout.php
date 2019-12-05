<?php
    require_once("sessionHandling.php");
    require_once ("database.php");

    unset($_SESSION["username"]);
    session_destroy();
    session_regenerate_id(true);
    session_start();
    redirect("homePage.php", "Logout successful!");

?>