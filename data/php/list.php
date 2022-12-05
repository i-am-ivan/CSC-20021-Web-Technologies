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
                    <li class="active">
                        <a href="list.php"> Records </a>
                    </li>
                    <li class="login">
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </nav>
    </div>

    <div class="container">
        <h1> Records </h1>
        <hr>
        <div class="container">
            <a href="new-record.php" class="new-record"> New Record </a>
        </div>
        <div class="">
            <table>
                <thead>
                    <tr>
                        <td>Title</td>
                        <td>Description</td>
                    </tr>
                </thead>
                <tr>
                    <td>1. Homepage and UI/UX.</td>
                    <td>
                        <ol type="a">
                            <li>
                                Authors:
                            </li>
                            <li>
                                Year:
                            </li>
                            <li>
                                Journal
                            </li>
                            <li>
                                DOI:
                            </li>
                            <li>
                                School:
                            </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td>2. Portfolio of the following selected tasks from practicals.</td>
                    <td>
                        <ol type="a">
                            <li>
                                Authors:
                            </li>
                            <li>
                                Year:
                            </li>
                            <li>
                                Journal
                            </li>
                            <li>
                                DOI:
                            </li>
                            <li>
                                School:
                            </li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td>3. Publication system.</td>
                    <td>
                        <ol type="a">
                            <li>
                                Authors:
                            </li>
                            <li>
                                Year:
                            </li>
                            <li>
                                Journal
                            </li>
                            <li>
                                DOI:
                            </li>
                            <li>
                                School:
                            </li>
                        </ol>
                    </td>
                </tr>
            </table>
        </div>
    </div>

        <footer>
            <hr>
            &copy; 2022
        </footer>
</body>
</html>