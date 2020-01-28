<?php
 require_once ('functions.php');
session_start();

if (!isUserLoggedIn()) {
    header('Location: index.php');
}

?>

<html>

<p>Congratulations you are logged in.</p>

</html>