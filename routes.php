<?php

$router->get('/', 'index.php');

//* Login
$router->get('/login', 'login/create.php')->only('guest');

//*Register
$router->get('/register', 'register/create.php')->only('guest');