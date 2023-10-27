<?php

function generateRandomPassword($length) {
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_-=+;:,.?';
    $chars = $uppercase . $lowercase . $numbers . $specialChars;
    $password = '';
    $chars_length = strlen($chars);

    // Assicurati che la password contenga almeno una lettera minuscola, una maiuscola, un numero e un carattere speciale
    $password .= $uppercase[rand(0, strlen($uppercase) - 1)];
    $password .= $lowercase[rand(0, strlen($lowercase) - 1)];
    $password .= $numbers[rand(0, strlen($numbers) - 1)];
    $password .= $specialChars[rand(0, strlen($specialChars) - 1)];

    for ($i = 0; $i < $length - 4; $i++) {
        $password .= $chars[rand(0, $chars_length - 1)];
    }

    // Mischia la password per mescolare i caratteri
    $password = str_shuffle($password);

    return $password;
}

?>