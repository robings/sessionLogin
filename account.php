<?php
 require_once ('functions.php');
session_start();

//some information to do the exercise
//define($THE_USERNAME, 'mmouse');
//define($THE_PASSWORD, 'theHouse_of');

if (!isUserLoggedIn()) {
    //header('Location: index.php');
}

if (isset($_POST['username'])) {
    if (validateInput($_POST['username']) || validateInput($_POST['password'])) {
        header('Location: index.php?loginMessage=invalidInput');
    }
}

if (isset($_POST['username'])) {
    if (checkUsername('mmouse') AND checkPassword('theHouse_of')) {
        $_SESSION['loggedIn'] = true;
    }
}

?>

<html>

<h1>Your Account</h1>

<p>Congratulations you are logged in.</p>

<form action='account.php' method='get'>

    <input type='submit' value='Log me out' />

</form>

<a href='index.php'>index</a>


</html>