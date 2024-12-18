<?php

$id = $_POST['_id'];

$db = getDatabaseClass();

$db->query("DELETE FROM todos WHERE todo_id = :id", [
    ':id' => $id
]);

redirect('/todo');