<?php
 require_once ('functions.php');
session_start();

//some information to do the exercise
//define($THE_USERNAME, 'mmouse');
//define($THE_PASSWORD, 'theHouse_of');



if (isset($_POST['username'])) {
    if (validateInput($_POST['username']) || validateInput($_POST['password'])) {
        header('Location: index.php?loginMessage=invalidInput');
        exit;
    }
}

if (isset($_POST['username'])) {
    if (checkUsername('mmouse') AND checkPassword('theHouse_of')) {
        $_SESSION['loggedIn'] = true;
        var_dump($_SESSION);
    } else {
        header('Location: index.php?loginMessage=credentials');
        exit;
    }
}

if (!isUserLoggedIn()) {
    header('Location: index.php');
    exit;
}

?>

<html>

<h1>Your Account</h1>

<p>Congratulations you are logged in.</p>

<form action='index.php?loginMessage=loggedOut' method='get'>

    <input type='submit' value='Log me out' />

</form>

<a href='index.php'>index</a>


</html>