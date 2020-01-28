<?php

function isUserLoggedIn() {
    return (isset($_SESSION['loggedIn']));
}

function checkForMessage() {
    if (isset($_GET['loginMessage'])) {
        if ($_GET['loginMessage'] == 'invalidInput') {
            return 'characters <, >, &, ! and spaces not allowed';
        }
    }
}

function checkUsername($username) {
  //check if username is correct
}

function checkPassword($password) {
    //check if password is correct
}

function validateInput($input): bool {
    if ((strpos($input, '!') !== false) || (strpos($input, '&') !== false) || (strpos($input, '<') !== false) || (strpos($input, '>') !== false) || (strpos($input, ' ') !== false)) {
        return true;
    } else {
        return false;
    }
}

function validatePassword($password) {
    //validation for password
}

function setLoggedIn() {
    //if username and password checkout, set a flag for logged in the session
}