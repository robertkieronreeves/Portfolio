<?php
/*
 * checks is the login session has been set and if so if it true
 *
 * @param array session the super global $_SESSION
 *
 * return boolean true if the user is logged in or false if session does not exists or is false
 */
function checkSessionLogin(array $session): bool {
    if (!isset($session['login']) || $session['login'] === false) {
        return false;
    }
    return true;
}//end check_session()