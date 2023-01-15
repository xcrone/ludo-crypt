<?php

namespace XCrone\LudoEncryption\Facades;

use Illuminate\Support\Facades\Facade;

class Ludo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ludo-encryption';
    }
}