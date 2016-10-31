<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	public function ip(Request $request)
	{
		return response()->json([
			'ip' => $request->ip()
		]);
	}

	public function userAgent(Request $request)
	{
		return response()->json([
			'userAgent' => $request->header('user-agent')
		]);
	}

	public function headers(Request $request)
	{
		$headers = collect($request->header());

		return response()->json([
			'headers' => $this->formatHeaders($headers)
		]);
	}

	public function get(Request $request)
	{
		$headers = collect($request->header());

		return response()->json([
			'parameters' => $request->all(),
			'headers' => $this->formatHeaders($headers),
			'url' => $request->url(),
			'origin' => $request->ip()
		]);
	}
}
