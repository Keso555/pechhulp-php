<?php require __DIR__ . '/init.php';

if (!isset($_POST['email']) || !is_email($_POST['email'])) {
    die('Voer een geldig e-mailadres in!');
}

if (!isset($_POST['password']) || empty($_POST['password'])) {
    die('Voer een geldig wachtwoord in! Mag niet leeg zijn.');
}

$user = selectOne('SELECT * FROM users WHERE email = :email', [
    ':email' => $_POST['email'],
]);

if (!$user || password_verify($_POST['password'], $user->password)) {
    die('Geen geldige email of wachtwoord combinatie!');
}

$_SESSION['user_id'] = $user['id'];

redirect(path('public/index.php'));
