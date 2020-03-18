<?php
class Session
{
    function login($user_login, $password)
    {
        require_once("../model/user.php");
        $user = new User;

        session_start();

        $user_result = $user->select_user($user_login, $password);

        if ($user_result) {
            $_SESSION['playstate_user'] = $user_result["username"];
            $_SESSION['playstate_password'] = $user_result["password"];
            return true;
        } else {
            session_destroy();
            return false;
        }
    }
    function logout()
    {
        session_start();
        session_destroy();
    }

    function verify()
    {
        session_start();
        if (isset($_SESSION['playstate_user']) && isset($_SESSION['playstate_password'])) {
            require_once("../model/user.php");
            $user = new User();
            $user_quary = $user->select_user($_SESSION['playstate_user'], $_SESSION['playstate_password']);
            if ($user_quary) {
                return $user_quary;
            }
        }
        session_destroy();
        return false;
    }
}
