<?php require __DIR__ . '/init.php';

check_login_or_exit();

if($_POST['action'] === 'create'){
    if (!isset($_POST['score']) || empty($_POST['score'])) {
        die('Voer een geldig waarde in! Mag niet leeg zijn.');
    }
    
    if (!isset($_POST['description']) || empty($_POST['description'])) {
        die('Voer een geldig omschrijving in! Mag niet leeg zijn.');
    }
    
    query('INSERT INTO reviews (score, description, user_id) VALUES (:score, :description, :user_id)', [
        ':score' => $_POST['score'],
        ':description' => $_POST['description'],        
        ':user_id' => $_SESSION['user_id'],
    ]);
    
    redirect(path('public/reviews/index.php'));
}

if($_POST['action'] === 'edit'){
    if (!isset($_POST['description']) || empty($_POST['description'])) {
        die('Voer een geldig omschrijving in! Mag niet leeg zijn.');
    }
    
    if (!isset($_POST['score']) || empty($_POST['score'])) {
        die('Voer een geldig waarde in! Mag niet leeg zijn.');
    }
    
    query('UPDATE reviews SET description = :description, score = :score WHERE id = :id AND user_id = :user', [
        ':description' => $_POST['description'],
        ':score' => $_POST['score'],
        ':id' => $_POST['id'],
        ':user' => $_SESSION['user_id'],
    ]);
    
    redirect(path('public/reviews/single.php?review=' . $_POST['id']));
}

if($_POST['action'] === 'delete'){
    query('DELETE FROM reviews WHERE id = :id AND user_id = :user', [
        ':id' => $_POST['id'],
        ':user' => $_SESSION['user_id'],
    ]);
    
    redirect(path('public/reviews/index.php'));
}