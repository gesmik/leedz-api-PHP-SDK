<?php

namespace Leedz;

class ProductionEnvironment extends LeedzEnvironment
{
	public function __construct($clientId, $clientSecret)
	{
		parent::__construct($clientId, $clientSecret);
	}

	public function baseUrl()
	{
		return "https://test.treppenlift-zentrum.com";
	}
}
