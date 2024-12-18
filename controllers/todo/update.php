<?php

use Classes\Session;
use Classes\ValidateTodo;

$title = htmlspecialchars(trim($_POST['todotitle']));
$desc = htmlspecialchars(trim($_POST['tododesc']));
$id = $_POST['_id'];

Session::oldsess('_title', $title);
Session::oldsess('_desc', $desc);

if (ValidateTodo::validate($title)) {
    redirect('/todo');
}

$db = getDatabaseClass();

$db->query("UPDATE todos SET title = :title AND description = :description WHERE todo_id = :id", [
    ':title' => $title,
    ':description' => $desc,
    ':id' => $id
]);

redirect('/todo');