<?php


use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$notes = $db->query('select * from notes')->get();


view("notes/index.view.php",[
    "heading" => 'notes',
    "notes" => $notes
]);