<?php

// Define page functions
function verifyAuthUser()
{
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
        // TODO: redirect_to_login()
        //header('Location: ' . 'http://' . $_SERVER['HTTP_HOST'] . '/404');
        echo 'Permission denied';
        die();
    }
}

// Process page
session_start();

// Verify the user has a valid session (is logged in)
verifyAuthUser();

?>
<!DOCTYPE html>
<html>
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <style type="text/css">
            .black-background {
                background-color: #000000;
            }
        </style>
        <title><?php echo $pageTitle ?></title>
    </head>
    <body class="black-background">
        <h1><?php echo $pageTitle ?></h1>
        <p>Authenticated</p>
        <p><?php echo $pageURL; ?></p>
        <p><a href="/logout">Logout</a></p>
    </body>
</html> 