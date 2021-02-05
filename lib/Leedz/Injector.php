<?php

namespace Leedz;

/**
 * Interface Injector
 * @package Leedz
 *
 * Interface that can be implemented to apply injectors to Http client.
 *
 * @see HttpClient
 */
interface Injector
{
	/**
	 * @param $httpRequest HttpRequest
	 */
	public function inject($httpRequest);
}
