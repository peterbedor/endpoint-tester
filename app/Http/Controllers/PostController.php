<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
	public function post(Request $request)
	{
		$headers = collect($request->header());

		return response()->json([
			'parameters' => $request->all(),
			'headers' => $this->formatHeaders($headers),
			'url' => $request->url(),
			'origin' => $request->ip()
		]);
	}

	public function put(Request $request)
	{
		$headers = collect($request->header());

		return response()->json([
			'parameters' => $request->all(),
			'headers' => $this->formatHeaders($headers),
			'url' => $request->url(),
			'origin' => $request->ip()
		]);
	}

	public function patch(Request $request)
	{
		$headers = collect($request->header());

		return response()->json([
			'parameters' => $request->all(),
			'headers' => $this->formatHeaders($headers),
			'url' => $request->url(),
			'origin' => $request->ip()
		]);
	}

	public function delete(Request $request)
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
