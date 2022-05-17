<?php require __DIR__ . '/init.php';

if (!isset($_POST['name'])) {
    die('Voer een geldige naam in!');
}

if (!isset($_POST['email']) || !is_email($_POST['email'])) {
    die('Voer een geldig e-mailadres in!');
}

if (!isset($_POST['password']) || empty($_POST['password'])) {
    die('Voer een geldig wachtwoord in! Mag niet leeg zijn.');
}

query('INSERT INTO users (role_id, name, email, password) VALUES (:role_id, :name, :email, :password)', [
    ':role_id' => $_POST['role_id'],
    ':name' => $_POST['name'],
    ':email' => $_POST['email'],
    ':password' => $_POST['password'], 
]);

redirect(path('public/index.php'));