<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>508Proj</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
    <nav>
        <div class="main-wrapper">
            <ul>
            </ul>
            <div class="nav-login">
                <?php
                    if(isset($_SESSION['user_id'])){
                      echo '<form action = "includes/logout.php" method= "POST">
                            <button type= "submit" name = "submit">Logout</button>
                            </form>';
                    }
                    else{
                        echo '<form action="includes/login.php" method="POST">
                    <input type="text" name = "email" placeholder = "Email">
                    <input type="password" name = "password" placeholder = "Password">
                    <button type="submit" name = "submit">Login</button>
                </form>
                <a href="signup.php">Sign Up</a>';
                    }
                ?>

            </div>
        </div>
    </nav>
</header>