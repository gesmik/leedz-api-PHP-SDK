<?php

namespace Leedz;

abstract class LeedzEnvironment implements Environment
{
	private $clientId;
	private $clientSecret;
	private $time;

	public function __construct($clientId, $clientSecret)
	{
		$this->clientId = $clientId;
		$this->clientSecret = $clientSecret;
		$this->time = time();
	}

	public function authorizationString()
	{
		return base64_encode($this->clientId . ":" . $this->clientSecret);
	}
}
