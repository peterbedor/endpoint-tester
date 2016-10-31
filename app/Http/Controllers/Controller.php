<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function capitalize($header)
	{
		$header = collect(explode('-', $header));

		return implode('-', $header->map(function($word) {
			return ucwords($word);
		})->toArray());
	}

	public function formatHeaders($headers)
	{
		$headers = $headers->map(function($val, $key) {
			return $val[0];
		})->keyBy(function($val, $key) {
			return $this->capitalize($key);
		})->toArray();

		ksort($headers);

		return $headers;
	}
}
