<?php
namespace App\Http\Controllers;

class PagesController extends Controller
{
	public function index()
	{
		$data = [
			'/' => [
				'link' => '/',
				'description' => 'This page.'
			],
			'/get/ip' => [
				'link' => '/get/ip',
				'description' => 'Returns Origin IP.'
			],
			'/get/user-agent' => [
				'link' => '/get/user-agent',
				'description' => 'Returns user-agent.'
			],
			'/get/headers' => [
				'link' => '/get/headers',
				'description' => 'Returns header dict.'
			],
			'/get' => [
				'link' => '/get',
				'description' => 'Returns GET data.'
			],
			'/post' => [
				'link' => '/post',
				'description' => 'Returns POST data.'
			],
			'/patch' => [
				'link' => '/patch',
				'description' => 'Returns PATCH data.'
			],
			'/put' => [
				'link' => '/put',
				'description' => 'Returns PUT data.'
			],
			'/delete' => [
				'link' => '/delete',
				'description' => 'Returns DELETE data'
			],
			'/status/{code}' => [
				'link' => '/status/404',
				'description' => 'Returns given HTTP Status code.'
			],
			'/redirect?to=url' => [
				'link' => '/redirect?to=www.google.com',
				'description' => '302 Redirects to the foo URL.'
			],
			'/cookies' => [
				'link' => '/cookies',
				'description' => 'Returns cookie data.'
			],
			'/cookies/set?name=cookieName&value=cookieValue' => [
				'link' => '/cookies/set?name=cookieName&value=cookieValue',
				'description' => 'Sets one or more simple cookies.'
			],
			'/cookies/delete?name' => [
				'link' => '/cookies/delete?name=cookieName',
				'description' => 'Deletes one or more simple cookies.'
			],
			'/html' => [
				'link' => '/html',
				'description' => 'Renders an HTML Page.'
			],
			'/links/{number}' => [
				'link' => '/link/10',
				'description' => 'Returns page containing n HTML links.'
			]
		];

		return view('index')
			->with('data', $data);
	}
}
