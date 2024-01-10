<?php

use Illuminate\Mail\Markdown;

if (!function_exists('markdown')) {
    function markdown($text)
    {
        return Markdown::parse($text);
    }
}
