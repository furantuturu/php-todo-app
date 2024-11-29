<?php

use Classes\Session;

return view('login/create.views.php', [
    'title' => "NightShade | Login",
    'bg' => 'login-bg',
    'bodyLayout' => 'center-body-layout-pos',
    'registerSuccess' => Session::get('success'),
    'emailError' => [Session::get('email') ? 'emailError' : '', Session::get('email')],
    'passwordError' => [Session::get('password') ? 'passwordError' : '', Session::get('password')]
]);