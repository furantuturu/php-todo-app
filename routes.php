<?php

$router->get('/', 'index.php');

//* Login
$router->get('/login', 'login/create.php')->only('guest');
$router->post('/login', 'login/store.php');

//* Register
$router->get('/register', 'register/create.php')->only('guest');
$router->post('/register', 'register/store.php');

//* Logout
$router->delete('/logout', 'logout.php')->only('auth');

//* main page
$router->get('/todo', 'todo/index.php')->only('auth');
$router->post('/todo', 'todo/store.php');