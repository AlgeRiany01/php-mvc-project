<?php

use core\Database;
use core\Validator;

require base_path('core/Validator.php');
$config = require base_path('config.php');
$db = new Database($config['database']);
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


  if (! Validator::string($_POST['body'], 1, 255)) {
    $errors['body'] = 'body can\'t be less than 1 chars and above 255 chars';
  }


  if (empty($errors)) {
    $db->query("INSERT INTO notes(body,user_id) VALUES (?,?)", [$_POST['body'], 1]);
    $_POST['body'] = '';
  }
}



view("notes/create.view.php",[
  "heading" => 'Create Note',
  "errors" => $errors
]);