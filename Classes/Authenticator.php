<?php

namespace Classes;

class Authenticator
{
    public static function checkEmail(string $email) {
        if (! Validator::sameEmail($email)) {
            Session::flash('email', 'This email is not registered.');
        }

        return Session::has('_flash');
    }
    public static function checkPwd(string $email, string $password) {
        $db = getDatabaseClass();

        //* with the checkEmail being called first, $user will guarantee return a data from db
        $user = $db->query("SELECT email, password FROM users WHERE email = :email", [
            ':email' => $email
        ])->get();

        if (! password_verify($password, $user['password'])) {
            Session::flash('password', 'Password doesn\'t match with the registered email.');
        }

        return Session::has('_flash');
    }
}