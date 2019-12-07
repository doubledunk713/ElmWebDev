<?php
include("db.php");
include("queries.php");
include("sessionHandling.php");
$uniqueUser = true;
$success = false;
$uniqueEmail = true;
$goodLength = true;
$goodLetter = true;
$goodSpec = true;
$goodNum = true;
$goodEmail= true;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $user = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['password']);
    $first = htmlspecialchars($_POST['firstname']);
    $last = htmlspecialchars($_POST['lastname']);
    $name = $first . " " . $last;
    $uniqueUser = uniqueUserName($user);
    $uniqueEmail = uniqueEmail($email);

        if($uniqueUser && $uniqueEmail){

          $containsLetter  = preg_match('/[a-zA-Z]/', $pass);
          $containsNum  = preg_match('/\d/',          $pass);
          $containsSpec = preg_match('/[^a-zA-Z\d]/', $pass);

            $email = $_POST['email'];
            if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
              $goodEmail = false;
            }
            else if (strlen($pass) < 8){
              $goodLength = false;
            }
            else if($containsLetter != true){
              $goodLetter = false;
            }
            else if($containsNum != true){
              $goodNum = false;
            }
            else if($containsSpec != true){
              $goodSpec = false;
            }
            else{
              $success =  insertUser($user, $pass, $email, $name, 0);
            }
        }
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Elm Dev Team">
    <meta name="description" content="Login page for Elm Dev.">
    <meta name="keywords" content="">
    <link rel="stylesheet" type="text/css" href="register.css">
    <link rel="stylesheet" type="text/css" href="footerCSS.css">
    <link rel="stylesheet" type="text/css" href="headerCSS.css">
    <meta name=“robots” content=“noindex,nofollow”>
    <script src="register.js"></script>
    <title>Centuryelm</title>


</head>

<body>
    <?php include 'headerFile.php'; ?>

    <form method="post" action="register.php">
        <div class="page">

            <h1>Account Creation</h1>
            <fieldset>
                <div class="row">
                    <div class="colLeft">
                        <h2>Create Account</h2>
                        <div>
                            <label for="firstname">First name</label>
                            <input type="text" placeholder="Enter first name" id = "firstname" name="firstname" required>
                        </div>
                        <div>
                            <label for="lastname">Last name</label>
                            <input type="text" placeholder="Enter last name" id = "lastname" name="lastname" required>
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input type="email" placeholder="Enter email address" id = "email" name="email" required>
                        </div>
                        <div>
                            <label for="username">Username</label>
                            <input type="text" placeholder="Enter Username" id = "username" name="username" required>
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="password" placeholder="Enter Password" id = "password" name="password" required>
                        </div>

                        <div id="sub">
                            <p> <input type="submit" value="Create Account" id="submit" > </p>
                            <?php
                                if(!$uniqueUser){
                                    ?> <p> Username already taken </p> <?php
                                }
                                if(!$uniqueEmail){
                                    ?> <p> Email already taken </p> <?php
                                }
                                if($success) {
                                    ?> <p> Account created successfully</p> <?php
                                }
                                if(!$goodLength){
                                    ?> <p> Password must be at least 8 characters </p> <?php
                                }
                                if(!$goodLetter){
                                    ?> <p> Password must have at least one letter </p> <?php
                                }
                                if(!$goodNum){
                                    ?> <p> Password must have at least one number </p> <?php
                                }
                                if(!$goodSpec){
                                    ?> <p> Password must have at least one special character </p> <?php
                                }
                                if(!$goodEmail){
                                    ?> <p> Invalid email address </p> <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="colRight">
                      <div id="message">
                        <img src="profile.png" alt="Profile image" class="profile">
                        <h2>Password Requirements</h2>
                        <div>
                            <ul>
                                <li id="spec" class="invalid"> Must be at least eight characters long </li>
                                <li id="number" class="invalid"> Must have at least one number </li>
                                <li id="length" class="invalid"> Must have at least one special character </li>
                            </ul>
                        </div>
                      </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </form>
    <?php include 'footerFile.html'; ?>
</body>


</html>
