<?php

use Classes\Session;

return view('todo/index.views.php', [
    'title' => 'NightShade | ToDo',
    'bg' => 'todo-bg',
    'bodyLayout' => '',
    'titleError' => [Session::get('title') ? 'titleError' : '', Session::get('title')]
]);