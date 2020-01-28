<?php
 require_once ('functions.php');
session_start();

if (!isUserLoggedIn()) {
    //header('Location: index.php');
}

if (isset($_POST['username'])) {
    if (validateInput($_POST['username']) || validateInput($_POST['password'])) {
        header('Location: index.php?loginMessage=invalidInput');
    }
}

?>

<html>

<h1>Your Account</h1>

<p>Congratulations you are logged in.</p>

<form action='account.php' method='post'>

    <input type='submit' value='Log me out'/>

</form>

<a href='index.php'>index</a>

</html>