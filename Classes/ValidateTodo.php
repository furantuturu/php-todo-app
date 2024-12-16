<?php

namespace Classes;

use Classes\Session;

class ValidateTodo
{
    public static function blankTitle(string $title) {
        return empty($title);
    }

    public static function lengthyTitle(string $title) {
        return strlen($title) > 50;
    }

    public static function validate(string $title) {
        if (static::blankTitle($title)) {
            Session::flash('title', 'Title can\'t be blank');
        }
        if (static::lengthyTitle($title)) {
            Session::flash('title', 'Title can\'t be more than 50 characters');
        }

        return Session::has('_flash');
    }
}