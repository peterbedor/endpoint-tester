<?php
namespace App\Http\Controllers;

class LinkController extends Controller
{
	public function link($links)
	{
		if ($links > 500) {
			$links = 500;
		}

		return view('link')
			->with('links', $links);
	}
}
