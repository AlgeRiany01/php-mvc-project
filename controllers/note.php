<?php


$heading = 'notes';
$currentUserId = 1;



$config = require 'config.php';
$db = new Database($config['database']);
$note = $db->query('select * from notes where id = ? ', [$_GET['id']])->findOrFail();


authorize($note['user_id'] == $currentUserId);




require "views/note.view.php";
