<?php
namespace shgysk8zer0\ShareAPI;

final class Reddit extends URLSearchParams
{
	use Traits;
	const ENDPOINT = 'https://reddit.com/submit';

	public function __construct($url)
	{
		if ($this->_isURL($url)) {
			parent::__construct(['url' => $url]);
		} else {
			throw new \InvalidArgumentException("$url is not a valid URL.");
		}
	}
}
