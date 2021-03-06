<?php
# start sessions 
# very important for this to be placed before any HTML is emmited
session_start();
?>
<!doctype html>
<html>

<head>
    <title>Exploring PHP Sessions</title>
</head>

<body>
    <h1>Create Session Variables</h1>
    <?php

    # check to see if session variable already exists
    if (!isset($_SESSION['views'])) {
        $_SESSION['views'] = ;
    }

    # check to see if session variable already exists
    if (!isset($_SESSION['browser'])) {
        $_SESSION['browser'] = $_SERVER[''];
    }

    # check to see if session variable already exists
    if (!isset($_SESSION['role'])) {
        $_SESSION['role'] = '';
    }
    ?>

    <?php

    echo '<p>Your current role is: ' . $_SESSION['role'] . '</p>';
    echo '<p>The version of browser is: ' . $_SESSION['browser'] . '</p>';

    # increment the session variable
    $_SESSION['views'] = $_SESSION['views'] + 1;
    echo 'The number of page views is: ' . $_SESSION['views'];
    ?>
    <!-- Links to other pages -->


</body>

</html>