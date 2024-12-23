<?php


namespace Http\Forms;

use Core\Validator;

class LoginForm
{
    protected $errors = [];


    public function validate($email, $password)
    {


        if (!Validator::email($email)) {
            $this->errors['email'] = "Please provide a valid email address.";
        }


        if (!Validator::string($password, 7, 255)) {
            $this->errors['password'] = "Please provide a password at least 7 chars.";
        }

        return empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field] = $message;
    }
}
