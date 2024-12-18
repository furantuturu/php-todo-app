<?php

use Classes\Session;

$db = getDatabaseClass();
$todos = $db->query("SELECT todo_id, title, description, checked FROM todos")->getAll();
$checked = filter_var($todos[0]['checked'], FILTER_VALIDATE_BOOLEAN);

return view('todo/index.views.php', [
    'title' => 'NightShade | ToDo',
    'bg' => 'todo-bg',
    'bodyLayout' => '',
    'titleError' => [Session::get('title') ? 'titleError' : '', Session::get('title')],
    'todos' => $todos,
    'checked' => $checked ? 'checked-todo' : ''
]);