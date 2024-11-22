<?php

use Classes\Session;
use Classes\Authenticator;

$email = $_POST['email'];
$password = $_POST['pwd'];

Session::oldsess('_email', $email);

if (Authenticator::checkEmail($email)) {
    redirect('/login');
}

if (Authenticator::checkPwd($email, $password)) {
    redirect('/login');
}

Session::put('auth_user', ['email' => $email]);
session_regenerate_id(true);

redirect('/todo');