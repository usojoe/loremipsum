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
	  $faker = \Faker\Factory::create();

    $numberofusers = $request->input('numberofusers');
		$blocks = $request->input('blocks');
		$image = $request->input('image');
		$birthday = $request->input('birthday');
		$profile = $request->input('profile');
		$streetaddress = $request->input('streetaddress');

	//	if isset($blocks->)) {

			echo $faker->name;
			echo $faker->address;
			echo $faker->text;

//	else {
	//		echo $c;

		}


   }

  //	$this->validate($request, [

 		//	'blocks' => 'required',

// 	]);

//if (isset($blocks [])) {

//return <?php

//$random = new Rych\Random\Random();

// Generate a 16-byte string of random raw data
//$randomBytes = $random->getRandomBytes(16);

// Get a random integer between 1 and 100
//$randomNumber = $random->getRandomInteger(1, 100);

// Get a random 8-character string using the
// character set A-Za-z0-9./
//$randomString = $random->getRandomString(8);


?>
