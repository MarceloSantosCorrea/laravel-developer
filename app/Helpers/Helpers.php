<?php

namespace App\Helpers;

class Helpers
{
    public static function languagesToArray()
    {
        return collect(\Config::get('ciclano.languages'))->map(function ($arr) {
            return $arr['name'];
        })->toArray();
    }
}