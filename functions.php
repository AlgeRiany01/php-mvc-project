<?php

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


function authorize($condition , $status = Response::FORBIDDEN){
        if(! $condition){
                abort($status);
        }
}