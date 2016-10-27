<?php
namespace shgysk8zer0\ShareAPI;

trait Traits
{
	private function _isURL($url)
	{
		return filter_var("$url", FILTER_VALIDATE_URL);
	}

	public function __toString()
	{
		return self::ENDPOINT . '?' . parent::__toString();
	}
}
