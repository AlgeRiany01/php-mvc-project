<?php

use core\Database;

$config =  require base_path('config.php');
$db = new Database($config['database']);
$notes = $db->query('select * from notes')->get();


view("notes/index.view.php",[
    "heading" => 'notes',
    "notes" => $notes
]);