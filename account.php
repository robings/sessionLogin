<?php
 require_once ('functions.php');
session_start();

if (!isUserLoggedIn()) {
    //header('Location: index.php');
}

?>

<html>

<h1>Your Account</h1>

<p>Congratulations you are logged in.</p>

<form action='account.php' method='post'>

    <input type='submit' value='Log me out'/>

</form>

</html>