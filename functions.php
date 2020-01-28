<?php

function isUserLoggedIn() {
    return (isset($_SESSION['loggedIn']));
}

function checkForMessage() {
    if (isset($_GET['loginMessage'])) {
        if ($_GET['loginMessage'] == 'invalidInput') {
            return 'characters <, >, &, ! and spaces not allowed';
        } elseif ($_GET['loginMessage'] == 'credentials') {
            return 'incorrect login credentials';
        } elseif ($_GET['loginMessage'] == 'loggedOut') {
            return 'you are logged out';
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

function checkPassword($password): bool {
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



function setLoggedIn() {
    //if username and password checkout, set a flag for logged in the session
}

function logOut($location, $message = '') {
    session_abort();
    if ($message != '') {
        $message = '?' . $message;
    }
    $headerString = 'Location: ' . $location . $message;
    header($headerString);
    exit;
}