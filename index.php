<?php

require_once ('functions.php');
session_start();



echo checkForMessage();

if (isset($_GET['loginMessage'])) {
    if ($_GET['loginMessage'] == 'loggedOut') {
        unset($_SESSION['loggedIn']);
    }
}

if (isUserLoggedIn()) {
    header('Location: account.php');
}

?>

<html>
<h1>Login</h1>
<form action='account.php' method='post'>
    <label>Username: </label>
    <input type='text' name='username' />
    <br /><br />
    <label>Password: </label>
    <input type='text' name='password' />
    <br /><br />
    <input type='submit' />

</form>

</html>