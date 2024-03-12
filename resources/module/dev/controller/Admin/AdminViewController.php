<?php

namespace Plugin\Controller\Admin;

use Plugin\Support\Log;
use Plugin\Routes\AdminRouter;
use Plugin\Controller\Controller;

/**
 * Plugin html views
 *
 */

class AdminViewController extends Controller
{
	/**
	 * Plugin request to build
	 *
	 */
	protected $request;

	/**
	 * Wordpress Nonce
	 *
	 */
	protected function nonce()
	{
		return wp_create_nonce("pr_custom_like_nonce");
	}

	/**
	 * Builds plugin content dynamically via ajax POST requests
     *
	 */
    public function content($request)
    {
        echo (new AdminRouter())->route($request->view(), $request) ?? '404';

		exit;
    }

	/**
	 * Builds plugin pages from Wordpress URI
     *
	 */
	protected function pageConfig($page = null)
	{
		$slug = $this->request->plugin->slug;

		$routes = [
			$slug => (new AdminRouter())->route('/example'),
			$slug.'-setting' => (new AdminRouter())->route('/setting')
		];

		return ! $page ? $routes : $routes[$page];
	}

	/**
	 * Builds plugin static pages
     *
	 */
    public function template()
    {
		$page = $this->pageConfig($this->request->get()->page);

		// required scripts for all pages
        wp_enqueue_style('font-awesome-4.6.3');
		wp_enqueue_style('bootstrap-min');
		wp_enqueue_style('default');
		wp_enqueue_script('bootstrap-bundle');
		wp_enqueue_script('plugin-core');
		wp_enqueue_script('plugin-view');

		// page required scripts
		if (count($page['scripts']) > 0) {

		}

		// view required data
		$data = new \stdClass;
		$data->route = $page;
        $data->nonce = $this->nonce();
		$data->plugin = $this->request->plugin;

		echo $this->view('admin.template', $data);
    }


    /**
	 * Builds plugin static
     *
	 */
    public function build($request)
    {
		$this->request = $request;

		add_action('init', [$this, 'assets']);

		add_action('admin_menu', [$this, 'menu']);
    }

    /**
	 * WP ui scripts register
     *
	 */
	public function assets()
	{
		$assets = $this->request->plugin->url.'view/assets';

		wp_register_style('font-awesome-4.6.3', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
		wp_register_style('bootstrap-min', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
		wp_register_style('default', $assets.'/css/default.css');
		wp_register_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', null, 'custom-'.date('His'), true);
		wp_register_script('plugin-core', $assets.'/js/_common/plugin-core.js', ['jquery'], 'custom-'.date('His'), true);
		wp_register_script('plugin-view', $assets.'/js/_common/plugin-view.js', ['jquery'], 'custom-'.date('His'), true);
	}

	/**
	 * WP menu register
     *
	 */
	public function menu()
	{
		$slug = $this->request->plugin->slug;

		add_menu_page(
			null, // string $page_title (if has submenu leave it nulled)
			'PR Custom', // string $menu_title
			'manage_options', // string $capability
			$slug, // string $menu_slug
			null, // callable $function (if has submenu leave it nulled)
			'dashicons-rest-api', // string $menu_icon
			6 // menu position
		);

		// if plugin menu has sub-menus
		foreach ($this->pageConfig() as $sub_slug => $route) {
			add_submenu_page(
				$slug,
				'PR Custom - '.$route['title'],
				$route['menu'],
				'manage_options',
				$sub_slug,
				[$this, 'template'],
			);
		}
	}

}
