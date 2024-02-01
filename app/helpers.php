<?php
function getPageName(string $route): string
{
    $output = '';
    for ($i = 0; $i < strlen($route); $i++) {
        if ($route[$i] == '.') {
            return $output;
        }
        $output .= $route[$i];
    }
    return $output;
}
