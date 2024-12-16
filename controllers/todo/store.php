<?php

use Classes\Session;
use Classes\ValidateTodo;

$title = $_POST['todotitle'];
$desc = $_POST['tododesc'];

Session::oldsess('title', $title);
Session::oldsess('desc', $desc);

if (ValidateTodo::validate($title)) {
    redirect('/todo');
}

$db = getDatabaseClass();

$db->query("INSERT INTO todos (title, description) values (:title, :description)", [
    ':title' => $title,
    ':description' => $desc
]);

redirect('/register');