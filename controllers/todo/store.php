<?php

use Classes\Session;
use Classes\ValidateTodo;

$title = htmlspecialchars(trim($_POST['todotitle']));
$desc = htmlspecialchars(trim($_POST['tododesc']));

Session::oldsess('_title', $title);
Session::oldsess('_desc', $desc);

if (ValidateTodo::validate($title)) {
    redirect('/todo');
}

$db = getDatabaseClass();

$db->query("INSERT INTO todos (title, description) values (:title, :description)", [
    ':title' => $title,
    ':description' => $desc
]);

redirect('/todo');