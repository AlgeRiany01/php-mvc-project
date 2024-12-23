<?php


use core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$errors = [];



if (! Validator::string($_POST['body'], 1, 255)) {
    $errors['body'] = 'body can\'t be less than 1 chars and above 255 chars';
}


if (!empty($errors)) {
    return   view("notes/create.view.php", [
        "heading" => 'Create Note',
        "errors" => $errors
    ]);
}

$db->query("INSERT INTO notes(body,user_id) VALUES (?,?)", [$_POST['body'], 1]);
$_POST['body'] = '';



header('location: /notes');
die();
