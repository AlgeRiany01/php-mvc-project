<?php 



view('sessions/create.view.php',[
    'errors' => $_SESSION['_flash']['errors'] ?? []
]
);