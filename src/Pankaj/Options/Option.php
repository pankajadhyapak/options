<?php namespace Pankaj\Options;

use Illuminate\Support\Facades\Facade;

class Option extends Facade {

    public static function getFacadeAccessor()
    {
        return 'options';
    }
} 