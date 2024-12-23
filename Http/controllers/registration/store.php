<?php

use Core\Database;
use core\Validator;
use core\App;


$email = $_POST['email'];
$password = $_POST['password'];



$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = "Please provide a valid email address.";
}


if (!Validator::string($password, 7, 255)) {
    $errors['password'] = "Please provide a password at least 7 chars.";
}


if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}


$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = ?', [$email])->find();


if ($user) {

    redirect('/');
}


$db->query("INSERT INTO users(email,password) VALUES(?,?)", [$email, password_hash($password, PASSWORD_BCRYPT)]);
redirect('/login');
