<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/

	public function getIndex()
	{
		return view('devtools.index');
	}

public function postIndex(Request $request)
{


		$this->validate($request, [

			'blocks' => 'required',

	]);
	  //dd($request->all());

			return "Process the form.";
	}
}

?>
