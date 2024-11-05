<?php

namespace Source\Support;

class Session
{
    public function __construct()
    {
        session_start();
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
}