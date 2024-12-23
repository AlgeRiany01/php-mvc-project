<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$currentUserId = 1;



    $note = $db->query('select * from notes where id = ? ', [$_POST['id']])->findOrFail();
    authorize($note['user_id'] == $currentUserId);
    
    $db->query("DELETE FROM notes WHERE id = ?" , [$_POST['id']]);
    header("location: /notes");
    exit();
    

