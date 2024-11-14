<?php

namespace Source\Support;

class Str
{
    public static function clearSymbolsAndNumbers(?string $string): ?string
    {
        if (empty($string)) return null;
        return preg_replace('/[^A-Za-z]/', '', $string);
    }
}