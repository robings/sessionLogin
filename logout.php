<?php

require_once ('functions.php');
session_start();

if (!isUserLoggedIn()) {
    header('Location: index.php');
    exit;
}

logOut('index.php', 'loginMessage=loggedOut');