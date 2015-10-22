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

public function postFakerIndex(Request $request)

{

	$faker = \Faker\Factory::create();

	$faker_text = $faker->text(2000);

	$this->validate($request, [

	'blocks' => 'required',

	]);

echo $faker_text;

}

public function postIndex(Request $request)
{
	// calling the package
	  $faker = \Faker\Factory::create();

		$users = $request->input('numberofusers');
		$name = $faker->name;
		$image = $faker->image;
		$title = $faker->title;
		$streetaddress = $faker->address;
		$email = $faker->email;
		$birthday = $faker->date($format = 'Y-m-d', $max = 'now');
		$profile = $faker->paragraphs($nb = 3);

	  $this->validate($request, [

		'numberofusers' => 'required',

		]);

		$singleprofile = array();

			 for ($i = 0; $i < $users; $i++)

			 {
						$singleprofile[] = '$title'.'$name';
			}

			return view('devtools.randomusers', ['singleprofile' => $singleprofile]);


/*
    $i = $request->input('numberofusers');
		$image = $request->input('image');
		$birthday = $request->input('birthday');
		$profile = $request->input('profile');
		$streetaddress = $request->input('streetaddress');

		$name = $faker->name;
		$image = $faker->image;
		$streetaddress = $faker->address;
		$email = $faker->email;


		$singleprofile = $name.$email.$profile;
		$singleprofilewithimage = $name.$image.$email.$profile;
		$singleprofilewithimageandaddress = $name.$image.$email.$streetaddress.$profile;
		$singleprofilewithimageaddressandbirthday = $name.$image.$email.$birthday.$streetaddress.$profile;


	$this->validate($request, [

		'numberofusers' => 'required',

		]);


//for each ($i=0; $i < 10; $i++);
//
//	echo $faker->title($gender = null|'male'|'female');
//	echo $faker->name;
//	echo $faker->address;
//	echo $faker->image;

if isset($blocks->)) {

	return view('devtools.randomusers')->with('singleprofilewithimageandaddress', $singleprofilewithimageandaddress)->with('singleprofilewithimageandaddress', $singleprofilewithimageandaddress);


//return view('homepage',['title' => $title,'text' => $content, 'all' => $all ]);
// Create logic for LoremIpsum text
	//	for each('blocks')) {

	//	}
//		$generator = new Badcow\LoremIpsum\Generator();
//
	//	if isset($blocks->)) {

//  echo implode('<p>', $paragraphs);

// write logic for request-specific delivery and presentation

// that logic goes here
*/

}

   }


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
