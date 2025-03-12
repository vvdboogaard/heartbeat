<?php

namespace Vvdboogaard\Heartbeat\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vvdboogaard\Heartbeat\Skeleton
 */
class HeartbeatFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'heartbeat';
    }
}
