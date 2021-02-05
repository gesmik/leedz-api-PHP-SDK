<?php

namespace Leedz;

class SandboxEnvironment extends LeedzEnvironment
{
	public function __construct($clientId, $clientSecret)
	{
		parent::__construct($clientId, $clientSecret);
	}

	public function baseUrl()
	{
		return "http://com_leedz.kick";
	}
}
