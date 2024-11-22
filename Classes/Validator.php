<?php

namespace Classes;

use Classes\Session;

class Validator
{
    public static function invalidPassword(string $password) {
        return strlen($password) < 8;
    }
    public static function validateEmail(string $email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public static function sameEmail(string $email) {
        $db = getDatabaseClass();

        $user = $db->query("SELECT * FROM users WHERE email = :email", [
            ':email' => $email
        ])->get();

        return (bool) $user;
    }
    public static function validate(string $email, string $password) {
        if (static::invalidPassword($password)) {
            Session::flash('password', "Password must be 8 characters longer.");
        }
        if (! static::validateEmail($email)) {
            Session::flash('email', 'Please input a valid email.');
        }
        if (static::sameEmail($email)) {
            Session::flash('email', 'This email is already registered.');
        }

        return Session::has('_flash');
    }
}