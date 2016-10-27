<?php
namespace shgysk8zer0\ShareAPI;

final class Facebook extends \shgysk8zer0\Core\URLSearchParams
{
	use Traits;
	const ENDPOINT = 'https://www.facebook.com/sharer/sharer.php';

	public function __construct($url)
	{
		if ($this->_isURL($url)) {
			parent::__construct(['u' => "$url"]);
		} else {
			throw new \InvalidArgumentException("$url is not a valid URL.");
		}
	}
}
