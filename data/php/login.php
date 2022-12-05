<?php
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(!strlen($username) || !strlen($password)){
        die('
            <div class="alert alert-danger">
                A username and password is required.
            </div>
        ');
    }

    $success = false;

    $handler = fopen("../records/administrators.csv","r");

    while(($data = fgetcsv($handler)) !== false){
        if($data[0] == $username && $data[1] == $password){
            $success = true;
            break;
        }
    }

    fclose($handler);

    if($success){
        // Redirect
        if(isset($username) and $password)
        {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header('Location: list.php');
        }
    }
    else{
        // If login failed
        header('Location: session.php');
    }