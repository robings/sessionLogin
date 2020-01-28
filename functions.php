<?php

/**
 * check if user is logged on
 * @return bool
 */
function isUserLoggedIn(): bool {
    return (isset($_SESSION['loggedIn']));
}

/**
 * check if there is a message to display and return a human readable version
 * @return string
 */
function checkForMessage() {
    if (isset($_GET['loginMessage'])) {
        if ($_GET['loginMessage'] == 'invalidInput') {
            return 'characters <, >, &, ! and spaces not allowed';
        } elseif ($_GET['loginMessage'] == 'credentials') {
            return 'incorrect login credentials';
        } elseif ($_GET['loginMessage'] == 'loggedOut') {
            return 'successfully logged out';
        }
    }
}

/**
 * check if the username is correct
 * @param string $username - the username to compare against
 * @return bool
 */
function checkUsername(string $username): bool {
  if (isset($_POST['username'])) {
      if ($_POST['username'] == $username) {
          return true;
      } else {
          return false;
      }
  }
}

/**
 * check if password is correct
 * @param string $password - the password to compare against
 * @return bool
 */
function checkPassword(string $password): bool {
    if (isset($_POST['password'])) {
        if ($_POST['password'] == $password) {
            return true;
        } else {
            return false;
        }
    }
}

/**
 * validate the input for illegal characters
 * @param string $input - the input to validate
 * @return bool
 */
function validateInput(string $input): bool {
    if ((strpos($input, '!') !== false) || (strpos($input, '&') !== false) || (strpos($input, '<') !== false) || (strpos($input, '>') !== false) || (strpos($input, ' ') !== false)) {
        return true;
    } else {
        return false;
    }
}

/**
 * function to logout user
 * @param string $location - the location to redirect to
 * @param string $message - reference that is converted to message by checkForMessage function
 */
function logOut(string $location, string $message = '') {
        if ($message != '') {
        $message = '?' . $message;
    }
    unset($_SESSION['loggedIn']);
    session_destroy();

    $headerString = 'Location: ' . $location . $message;
    header($headerString);
    exit;
}