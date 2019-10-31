<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Elm Dev Team">
    <meta name="description" content="Login page for Elm Dev.">
    <meta name="keywords" content="">
    <link rel="stylesheet" type="text/css" href="register.css">
    <?php include 'headerFile.html'; ?>
    <metaname=“robots”content=“noindex,nofollow”/>
    <title>Centuryelm</title>
</head>

<body>

    <form method="post" action="">
        <div class="page">

            <h1>Account Creation</h1>
            <fieldset>
                <div class="row">
                    <div class="colLeft">
                        <h2>Create Account</h2>
                        <div>
                            <label for="firstname">First name</label>
                            <input type="text" placeholder="Enter first name" name="firstname" required>
                        </div>
                        <div>
                            <label for="lastname">Last name</label>
                            <input type="text" placeholder="Enter last name" name="lastname" required>
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input type="text" placeholder="Enter email address" name="email" required>
                        </div>
                        <div>
                            <label for="username">Username</label>
                            <input type="text" placeholder="Enter Username" name="username" required>
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="text" placeholder="Enter Password" name="password" required>
                        </div>
                        <div id="sub">
                            <p> <input type="submit" value="Create Account" id="submit"> </p>
                        </div>
                    </div>
                    <div class="colRight">
                        <h2>Password Requirements</h2>
                        <div>
                            <ul>
                                <li> Must be at least eight characters long </li>
                                <li> Cannot contain your username </li>
                                <li> Cannot contain your first or last name </li>
                            </ul>
                            <img src="profile.png" alt="Profile image" class="profile">
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </form>

</body>
<?php include 'footerFile.html'; ?>

</html>
