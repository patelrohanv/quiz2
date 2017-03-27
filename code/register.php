<!DOCTYPE html>
<?php

?>
<html>
    <head>
        <!-- Compiled and minified Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header class="container">
        </header>
        <main class="container">
            <?php
                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $email = $_POST["email"];
                if(isset($_COOKIE[$firstname])) {
                    echo "Hi, " . $_COOKIE["name"] . ", you recently signed up with the email address: " . 
                        $_COOKIE["value"] . ", thank you!";
                }
                else {
                    echo "<p> Thank you for registering $firstname $lastname<p>";
                    setcookie($firstname, $email,  time()+60*60*2, '/');
                }
            ?>
            
        </main>
        <footer class="container">
        </footer>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Compiled and minified Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html> 