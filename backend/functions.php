<?php

function dump($variable)
{
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
    exit;
}

function redirect($path)
{
    header("Location: $path");
    exit;
}

function path($path)
{
    require_once('config.php');
    global $baseUrl;

    return $baseUrl . DIRECTORY_SEPARATOR . $path;
}

function is_email($text)
{
    return filter_var($text, FILTER_VALIDATE_EMAIL);
}

function check_login_or_exit()
{
    if (!isset($_SESSION['user_id'])) {
        die('Je moet ingelogd zijn voor deze actie!');
        exit;
    }
}
