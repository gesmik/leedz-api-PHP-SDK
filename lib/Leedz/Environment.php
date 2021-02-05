<?php

namespace Leedz;

/**
 * Interface Environment
 * @package Leedz
 *
 * Describes a domain that hosts a REST API, against which an HttpClient will make requests.
 * @see HttpClient
 */
interface Environment
{
	/**
	 * @return string
	 */
	public function baseUrl();
}
