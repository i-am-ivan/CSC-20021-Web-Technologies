<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>
        Login - CSC-20021 Web Technologies
    </title>
</head>
<body>
    <div>
            <nav class="navbar">
                <a class="mybrand" href="list.php">CSC-20021 Web Technologies</a>
                <ul>
                    <li>
                        <a href="list.php"> List </a>
                    </li>
                    <li class="active">
                        <a href="display.php"> { Record Name } </a>
                    </li>
                    <li class="login">
                        <a href="logout.php" class="login">Logout</a>
                    </li>
                </ul>
            </nav>
    </div>

    <div class="container">
        <h1>
            Hello, <?php echo $_SESSION['username']; ?>
        </h1>

    </div>

        <footer>
            <hr>
            &copy; 2022
        </footer>
</body>
</html>