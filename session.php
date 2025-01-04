<?php
session_start();

function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}

function getUserID()
{
    return $_SESSION['user_id'] ?? null;
}

function getUsername()
{
    return $_SESSION['username'] ?? null;
}
?>