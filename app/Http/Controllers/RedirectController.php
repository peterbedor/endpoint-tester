<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
	public function redirect(Request $request)
	{
		return redirect($request->input('to'));
	}
}
