<?php

use Classes\Session;

return view('register/create.views.php', [
    'title' => "NightShade | Register",
    'bg' => 'register-bg',
    'bodyLayout' => 'center-body-layout-pos',
    'emailError' => [Session::get('email') ? 'emailError' : '', Session::get('email')],
    'passwordError' => [Session::get('password') ? 'passwordError' : '', Session::get('password')]
]);