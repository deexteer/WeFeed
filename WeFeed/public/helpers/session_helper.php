<?php
function flash($name = '', $message = '') {
    if(!empty($name)) {
        if(!empty($message) && empty($_SESSION[$name])) {
            if(!empty($_SESSION[$name])) {
                unset($_SESSION[$name]);
            }
            $_SESSION[$name] = $message;
        } elseif(empty($message) && !empty($_SESSION[$name])) {
            echo '<div class="" id="msg-flash">' . $_SESSION[$name] . '</div>';
            unset($_SESSION[$name]);
        }
    }
}

?>
