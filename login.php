<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/style.css">
    <title>
        Login - CSC-20021 Web Technologies
    </title>
</head>
<body>
    <div>
            <nav class="navbar">
                <a class="mybrand" href="index.php">CSC-20021 Web Technologies</a>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="CV.php">My CV</a>
                    </li>
                    <li class="login active">
                        <a href="login.php" class="login">Login</a>
                    </li>
                </ul>
            </nav>
    </div>

    <div class="container">
        <h1> Login to Dashboard</h1>
        <form action="./data/php/login.php" method="post" class="" id="">
            <div class="">
                <div class="my-forms">
                    <label>Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="my-forms">
                    <label>Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
            </div>
            <div>
                <button type="submit"> Login </button>
            </div>
        </form>
    </div>

        <footer>
            <hr>
            &copy; 2022
        </footer>
</body>
</html>