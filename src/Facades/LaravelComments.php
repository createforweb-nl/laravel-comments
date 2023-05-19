<?php

namespace Createforweb\LaravelComments\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Createforweb\LaravelComments\LaravelComments
 */
class LaravelComments extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Createforweb\LaravelComments\LaravelComments::class;
    }
}
