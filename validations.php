<?php

function emptyUsernameCheck($username): bool
{
    if (empty($username)) {
        return true;
    }
    return false;
}

function emptyPasswordCheck($password): bool
{
    if (empty($password)) {
        return true;
    }
    return false;
}

function emptyEmailCheck($email): bool
{
    if (empty($email)) {
        return true;
    }
    return false;
}

function validateUsernameCharacters($username): bool
{
    if (preg_match('/^[a-zA-Z0-9]+$/', $username)) {
        return false;
    }
    return true;
}


function validatePasswordCharacters($password): bool
{
    if (preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
        return false;
    }
    return true;
}
