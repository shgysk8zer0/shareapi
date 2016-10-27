<?php
namespace shgysk8zer0\ShareAPI;

final class Twitter extends \shgysk8zer0\Core\URLSearchParams
{
	use Traits;
	const ENDPOINT = 'https://twitter.com/intent/tweet';

	public function __construct($url)
	{
		if ($this->_isURL($url)) {
			parent::__construct(['url' => "$url"]);
		} else {
			throw new \InvalidArgumentException("$url is not a valid URL.");
		}
	}
}
