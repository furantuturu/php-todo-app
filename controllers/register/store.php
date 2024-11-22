<?php

use Classes\Validator;
use Classes\Session;

$email = $_POST['email'];
$password = $_POST['pwd'];

Session::oldsess('_email', $email);

if (Validator::validate($email, $password)) {
    redirect('/register');
}

$db = getDatabaseClass();

$db->query("INSERT INTO users (email, password) VALUES (:email, :password)", [
    ':email' => $email,
    ':password' => password_hash($password, PASSWORD_BCRYPT)
]);

Session::flash('success',"Registration success!, You can now login");

redirect('/login');