<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php include 'menu.php'?>
        <div class="page-content">
            <h2>Home page</h2>
            <?php 
                if (isset($_SESSION['username']))
                {
                    echo "You are logged in as: " . $_SESSION['username'];
                } else {
                    echo "You are not logged in";
                }
            ?>
        </div>
    </body>
</html>