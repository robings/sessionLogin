<?php

function isUserLoggedIn() {
    return (isset($_SESSION['loggedIn']));
}

function checkUsername($username) {
    //check if $username is correct
}

function checkPassword($password) {
    //check if password is correct
}

function validateUsername($username) {
    //validation for username
}

function validatePassword($password) {
    //validation for password
}

function setLoggedIn() {
    //if username and password checkout, set a flag for logged in the session
}