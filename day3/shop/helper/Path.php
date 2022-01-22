<?php
class Path {
    public const ROOT = '/day3/shop/';

    public static function url(string $fragment = ''):string{
        return Path::ROOT . $fragment;
    }
}
