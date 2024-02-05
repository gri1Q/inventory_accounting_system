<?php

namespace App\Helpers;

if (!function_exists('format_bytes')) {
    function alert(string $text, string $status)
    {
        session([$status => $text]);
    }
}
