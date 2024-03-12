<?php

namespace Plugin\Controller\Admin\Setting;

use Plugin\Controller\Controller;

/**
 * Routes view requests
 */
class SettingViewController extends Controller
{
    protected $page = 'setting';

    public function pageConfig()
    {
        return [
            'page' => $this->page,
            'menu' => 'Plugin '.ucfirst($this->page).'s',
            'title' => ucfirst($this->page),
            'section' => 'external',
            'sections' => [
                'external' => [
                    'title' => 'External API'
                ],
                'wordpress' => [
                    'title' => 'Wordpress API'
                ],
            ],
            'scripts' => []
        ];
    }

    public function external($request)
    {
        return $this->view('admin.setting.external');
    }

    public function wordpress($request)
    {
        return $this->view('admin.setting.wordpress');
    }

}
