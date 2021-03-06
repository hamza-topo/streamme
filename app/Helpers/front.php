<?php


if (!function_exists('slugify')) {
    function slugify(string $string, string $delimiter = '-')
    {
        return  strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $string))))), $delimiter));
    }
}
