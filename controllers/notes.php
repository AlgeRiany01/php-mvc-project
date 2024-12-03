<?php


$heading = 'notes';

$config = require 'config.php';
$db = new Database($config['database']);
$notes = $db->query('select * from notes')->fetchAll();


require "views/notes.view.php";