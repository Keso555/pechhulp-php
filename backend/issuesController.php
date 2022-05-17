<?php require __DIR__ . '/init.php';

check_login_or_exit();

if($_POST['action'] === 'create'){
    if (!isset($_POST['issue']) || empty($_POST['issue'])) {
        die('Voer een geldig omschrijving in! Mag niet leeg zijn.');
    }
    
    query('INSERT INTO contactform_submissions (issue, user_id) VALUES (:issue, :user_id)', [
        ':issue' => $_POST['issue'],      
        ':user_id' => $_SESSION['user_id'],
    ]);
    
    redirect(path('public/index.php'));
}
