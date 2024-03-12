<?php

namespace Plugin\Controller\Admin\Example;

use Plugin\Support\Log;
use Plugin\Controller\Controller;

/**
 * Routes view requests
 */
class ExampleViewController extends Controller
{
    protected $page = 'example';

    public function pageConfig()
    {
        return [
            'page' => $this->page,
            'menu' => ucfirst($this->page).' Page',
            'title' => ucfirst($this->page),
            'section' => 'dashboard',
            'sections' => [
                'dashboard' => $this->dashboard('config'),
                'listing' =>  $this->listing('config')
            ],
            'scripts' => []
        ];
    }

    public function dashboard($request)
    {
        $scripts = [
            //['welcome.js' => 'init()'],
            'https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js',
            ['example/dashboard.js' => 'init()']
        ];

        if ($request == 'config') {
            return [
                'title' => 'Plugin Dashboard'
            ];
        }

        $data = new \stdClass;
		$data->scripts = $scripts;

        return $this->view('admin.example.dashboard', $data);
    }

    public function listing($request)
    {
        $scripts = ['example-listing.js'];

        if ($request == 'config') {
            return [
                'title' => 'Plugin Assets'
            ];
        }

        $data = new \stdClass;
		$data->scripts = $scripts;

        return $this->view('admin.example.listing', $data);
    }

}
