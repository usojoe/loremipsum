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

// print a basic user block
//for ($i=0; $i < 10; $i++) {
// echo $faker->name, "\n";
		echo $faker->name;
		echo $faker->address;

// print a block of LoremIpsum
      echo $faker->text(2000);
// Create logic for LoremIpsum text
	//	for each('blocks')) {

	//	}
}
//		$generator = new Badcow\LoremIpsum\Generator();
//
	//	if isset($blocks->)) {

//  echo implode('<p>', $paragraphs);



// write logic for request-specific delivery and presentation

// that logic goes here

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
