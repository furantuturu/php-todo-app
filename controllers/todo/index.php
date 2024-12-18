<?php

use Classes\Session;

$db = getDatabaseClass();
$todos = $db->query("SELECT todo_id, title, description FROM todos")->getAll();

return view('todo/index.views.php', [
    'title' => 'NightShade | ToDo',
    'bg' => 'todo-bg',
    'bodyLayout' => '',
    'titleError' => [Session::get('title') ? 'titleError' : '', Session::get('title')],
    'todos' => $todos
]);