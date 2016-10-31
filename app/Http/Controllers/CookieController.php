<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
	public function cookies(Request $request)
	{
		return response()
			->json([
				'cookies' => $request->cookie()
			]);
	}

	public function set(Request $request)
	{
		setcookie(
			$request->input('key'),
			$request->input('val')
		);

		return redirect('/cookies');
	}

	public function delete(Request $request)
	{
		$key = $request->input('key');

		if (isset($_COOKIE[$key])) {
			setcookie($key, '', time()-3600);

			unset($_COOKIE[$key]);
		}

		return redirect('/cookies');
	}
}
