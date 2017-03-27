<!DOCTYPE html>
<html>
    <head>
        <!-- Compiled and minified Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <header class="container">
        </header>
        <main class="container">
        <?php
            echo"
            <h1>Mars Mission 2020</h1><br>
            <p>
                Sign up for a trip to Mars! <br>
                Give us your first name, last name, and email address. <br>
                *Note, survival not guaranteed <br>
            </p><br>";
        ?>
            <form action="./code/register.php" method="post">
                <div class="form-group">
                    <label>First name: </label>
                    <input type="text" name="firstname"><br>
                </div>
                <div class="form-group">
                    <label>Last name: </label>
                    <input type="text" name="lastname"><br>
                </div>
                <div class="form-group">
                    <label>Email: </label>
                    <input type="email" name="email"><br>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </main>
        <footer class="container">
        </footer>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Compiled and minified Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html> 