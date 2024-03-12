<?php

namespace Plugin\Controller;

use Plugin\Support\Request;
use Plugin\Controller\Admin\AdminViewController;
use Plugin\Controller\Admin\AdminBackController;

/**
 * Observer object to control plugin actions
 *
 */

class AdminController
{
	/**
	 * Bootstraps the admin requests control
	 *
	 */
	public function __construct($plugin)
	{
		// catch any request to the plugin
		$request = new Request;

		// Wordpres requires "action" property for any ajax calls
 		if (isset($request->post()->action)) {

			// if it is needed to control requests from other plugins like "heartbeat" should be placed here...

			// else only continues calls from this plugin
			if ($request->post()->action != 'pr_custom_admin_ajax') {
				exit;
			}

			if ($request->is_ajax()) {
				if (! $request->view()) {
					return (new AdminBackController())->action($request);
				} else {
					return (new AdminViewController())->content($request);
				}
			}
		} else {
			$request->plugin = $plugin;

			return (new AdminViewController())->build($request);
		}
	}

}
