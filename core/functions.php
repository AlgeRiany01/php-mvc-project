<?php

use core\Response;


function dd($value)
{
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
        die();
}



function urlIs($url)
{
        return $_SERVER['REQUEST_URI'] === $url;
}


function authorize($condition, $status = Response::FORBIDDEN)
{
        if (! $condition) {
                abort($status);
        }
}

function base_path($path)
{
        return BASE_PATH . $path;
}
function view($path, $atr = [])
{
        extract($atr);
        require base_path('views/' . $path);
}

function abort($code = \core\Response::NOT_FOUND)
{
        http_response_code($code);

        require  base_path("views/{$code}.php");

        die();
}

 function redirect($path)
{
        header("location: $path");
        exit();
        
}
