<?php

namespace Plugin\Support;

/**
 * Observer
 *
 */

abstract class Route
{
    public function callback($route, $request = null)
    {
        $class = new $route[0];
        $method = $route[1];

        return $class->$method($request);
    }
}
