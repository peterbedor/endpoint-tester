<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
	public $codes = [
				100,
				101,
				102,
				200,
				201,
				202,
				203,
				204,
				205,
				206,
				207,
				300,
				301,
				302,
				303,
				304,
				305,
				306,
				307,
				400,
				401,
				402,
				403,
				404,
				405,
				406,
				407,
				408,
				409,
				410,
				411,
				412,
				413,
				414,
				415,
				416,
				417,
				418,
				422,
				423,
				424,
				425,
				426,
				449,
				450,
				500,
				501,
				502,
				503,
				504,
				505,
				506,
				507,
				509,
				510
			];

	public function respond(Request $request, $status)
	{
		if (in_array($status, $this->codes)) {
			return abort($status);
		}

		return false;
	}
}
