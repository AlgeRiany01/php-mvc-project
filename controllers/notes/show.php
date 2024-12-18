<?php
use core\Database;

$currentUserId = 1;


$config = require base_path('config.php');
$db = new Database($config['database']);






if($_SERVER['REQUEST_METHOD'] == "POST"){
    $note = $db->query('select * from notes where id = ? ', [$_GET['id']])->findOrFail();
    authorize($note['user_id'] == $currentUserId);
    
    $db->query("DELETE FROM notes WHERE id = ?" , [$_GET['id']]);
    header("location: /notes");
    exit();
    
}else{
    $note = $db->query('select * from notes where id = ? ', [$_GET['id']])->findOrFail();
    authorize($note['user_id'] == $currentUserId);
}

view("notes/show.view.php",[
    "heading" => 'notes',
    "note" => $note
]);