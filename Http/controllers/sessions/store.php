<?php

use Http\Forms\LoginForm;
use Core\Authenticator;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();


if ($form->validate($email, $password)) {

    $auth = new Authenticator();
    if ($auth->attempt($email, $password)) {

        redirect('/');
    } else {

        $form->error('email', 'email or password wrong');
    }
}

return view('sessions/create.view.php', [
    'errors' => $form->errors()
]);