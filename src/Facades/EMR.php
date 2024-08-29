<?php

namespace GCI\Platform\Plugins\EMR\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GCI\Platform\Plugins\EMR\EMR
 */
class EMR extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \GCI\Platform\Plugins\EMR\EMR::class;
    }
}
