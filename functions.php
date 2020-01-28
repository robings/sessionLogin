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

function checkUsername($username): bool {
  if (isset($_POST['username'])) {
      if ($_POST['username'] == $username) {
          return true;
      } else {
          return false;
      }
  }
}

function checkPassword($password) {
    if (isset($_POST['password'])) {
        if ($_POST['password'] == $password) {
            return true;
        } else {
            return false;
        }
    }
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