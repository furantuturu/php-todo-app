<?php

$id = $_POST['_id'];

$db = getDatabaseClass();

$todoChecked = $db->query("SELECT checked FROM todos WHERE todo_id = :id", [
    ':id' => $id
])->get();

$filterTodoChecked = filter_var($todoChecked['checked'], FILTER_VALIDATE_BOOLEAN);

if (! $filterTodoChecked) {
    $db->query("UPDATE todos SET checked = 'true' WHERE todo_id = :id", [
        ':id' => $id
    ]);
} else {
    $db->query("UPDATE todos SET checked = 'false' WHERE todo_id = :id", [
        ':id' => $id
    ]);
}

redirect('/todo');
