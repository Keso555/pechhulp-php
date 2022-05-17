<?php require __DIR__ . '/init.php';

check_login_or_exit();

session_destroy();

redirect(path('public/index.php'));
