<?php

namespace Plugin\Controller\Admin\Example;

use Plugin\Support\Log;
use Plugin\Controller\Controller;

/**
 * Routes Back requests
 */
class ExampleBackController extends Controller
{
    public function dashboard($request)
    {
        return __FUNCTION__;
    }

    public function listing($request)
    {
        return __FUNCTION__;
    }

}
