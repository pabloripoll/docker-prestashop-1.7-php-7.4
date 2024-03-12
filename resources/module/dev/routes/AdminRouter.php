<?php

namespace Plugin\Routes;

use Plugin\Support\Route;
use Plugin\Controller\Admin\Example\ExampleViewController;
use Plugin\Controller\Admin\Example\ExampleBackController;
use Plugin\Controller\Admin\Setting\SettingViewController;
use Plugin\Controller\Admin\Setting\SettingBackController;

class AdminRouter extends Route
{
    public function route($route, $request = null)
    {
        $route = $this->registers($route);

        return ! $route ? : $this->callback($route, $request);
    }

    public function registers($route)
    {
        $register = [
            '/example' => [ExampleViewController::class, 'pageConfig'],
            '/view/example/dashboard' => [ExampleViewController::class, 'dashboard'],
            '/back/example/dashboard' => [ExampleBackController::class, 'dashboard'],
            '/view/example/listing'   => [ExampleViewController::class, 'listing'],
            '/back/example/listing'   => [ExampleBackController::class, 'listing'],
            '/setting'  => [SettingViewController::class, 'pageConfig'],
            '/view/setting/external'  => [SettingViewController::class, 'external'],
            '/back/setting/external'  => [SettingBackController::class, 'external'],
            '/view/setting/wordpress' => [SettingViewController::class, 'wordpress'],
            '/back/setting/wordpress' => [SettingBackController::class, 'wordpress'],
        ];

        return $register[$route] ?? null;
    }
}
