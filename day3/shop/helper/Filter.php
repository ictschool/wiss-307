<?php

class Filter{

    public static function email(string $email): array {
        $matches = [];
        preg_match("/^([[:alnum:]]+[.]?[[:alnum:]]+)@([a-z]+[.][a-z]{2,})$/", $email, $matches);
        return $matches;
    }

    public static function street(string $street): array{
        $matches = [];
        preg_match("/^[[:alpha:]]+[[:space:]]{1}[:digit:]]+[[:alpha:]]?$/", $street, $matches);
        return $matches;
    }

}
