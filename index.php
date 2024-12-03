<?php

require "functions.php";
require "Database.php";
$config = require 'config.php';
$db = new Database($config['database']);




require "router.php";
