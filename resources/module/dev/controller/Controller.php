<?php

namespace Plugin\Controller;

use Plugin\Support\Request;
use Plugin\Support\Response;

/**
 * Controller service support
 *
 */

abstract class Controller
{
	public function request()
	{
		return new Request;
	}

	public function view($script = null, $data = null)
	{
		return (new Response)->view($script, $data);
	}

}
