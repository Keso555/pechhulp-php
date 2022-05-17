<?php require __DIR__ . '/../backend/init.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pechhulp</title>

    <link rel="stylesheet" href="<?php echo path('public/assets/style.css'); ?>">
</head>

<body>
    <header>
        <div class="topnav">

            <!-- LOGO -->
            <a href="<?php echo path('public/index.php'); ?>">
                <h4 class="M-blue">L</h4>
                <h4 class="y-red">O</h4>
                <h4 class="C-yellow">G</h4>
                <h4 class="M-green">O</h4>
            </a>

            <!-- PAGINAS -->
            <a href="<?php echo path('public/index.php'); ?>">Garages</a>
            <a href="<?php echo path('public/reviews/index.php'); ?>">Alle reviews</a>
            <a href="<?php echo path('public/notifications/index.php'); ?>">Alle meldingen</a>
            <a href="<?php echo path('public/reviews/create.php'); ?>">Schrijf een review</a>
            <a href="<?php echo path('public/issues/create.php'); ?>">Stel een vraag</a>

            <!-- LOGIN -->
            <?php if (isset($_SESSION['user_id'])) : ?>
            <a class="active" href="<?php echo path('public/logout.php'); ?>">Logout</a>
            <?php else : ?>
            <a class="active" href="<?php echo path('public/login.php'); ?>">Login</a>
            <a href="<?php echo path('public/register.php'); ?>">Register</a>
            <?php endif; ?>
        </div>

    </header>
    <main>